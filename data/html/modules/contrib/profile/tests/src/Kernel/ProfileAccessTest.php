<?php

namespace Drupal\Tests\profile\Kernel;

use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Session\AccountInterface;
use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;
use Drupal\profile\Entity\Profile;
use Drupal\profile\Entity\ProfileType;
use Drupal\profile\ProfileTestTrait;
use Drupal\user\Entity\User;

/**
 * Tests profile access handling.
 *
 * @group profile
 */
class ProfileAccessTest extends EntityKernelTestBase {

  use ProfileTestTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'entity',
    'profile',
    'views',
  ];

  /**
   * The access control handler.
   *
   * @var \Drupal\profile\ProfileAccessControlHandler
   */
  protected $accessControlHandler;

  /**
   * The access manager.
   *
   * @var \Drupal\Core\Access\AccessManagerInterface
   */
  protected $accessManager;


  /**
   * Testing profile type entity.
   *
   * @var \Drupal\profile\Entity\ProfileType
   */
  protected $type;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->installEntitySchema('profile');
    $this->installEntitySchema('view');
    $this->installConfig(['profile', 'user']);
    $this->accessControlHandler = $this->container->get('entity_type.manager')
      ->getAccessControlHandler('profile');
    $this->accessManager = $this->container->get('access_manager');

    $user_form_display = EntityFormDisplay::load("user.user.default");
    if (!$user_form_display) {
      $user_form_display = EntityFormDisplay::create([
        'targetEntityType' => 'user',
        'bundle' => 'user',
        'mode' => 'default',
        'status' => TRUE,
      ]);
      $user_form_display->save();
    }

    $this->type = $this->createProfileType('test', 'Test profile', TRUE);
    $this->createUser();
  }

  /**
   * Tests profile create and permissions.
   */
  public function testProfileCreateAccess() {
    // Test user without any permissions.
    $web_user1 = $this->createUser();
    $this->container->get('current_user')->setAccount($web_user1);

    // Verify user does not have access to create.
    $access = $this->accessControlHandler->createAccess($this->type->id(), $web_user1);
    $this->assertFalse($access);

    // Verify access through route.
    $this->assertFalse($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user1->id(), 'profile_type' => $this->type->id()],
      $web_user1
    ));

    // Test user with permission to only add a profile.
    $web_user2 = $this->createUser([], [
      "create {$this->type->id()} profile",
      "update own {$this->type->id()} profile",
    ]);
    $web_user1->addRole($web_user2->get('roles')->first()->target_id);
    $web_user1->save();

    // Verify user has access to add their own profile.
    $access = $this->accessControlHandler->createAccess($this->type->id(), $web_user2);
    $this->assertTrue($access);

    // User 2 can create profile of type.
    $this->container->get('current_user')->setAccount($web_user2);
    $this->assertTrue($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user2->id(), 'profile_type' => $this->type->id()],
      $web_user2
    ));
    // User 1 cannot create a profile for User 2.
    $this->container->get('current_user')->setAccount($web_user1);
    $this->assertFalse($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user2->id(), 'profile_type' => $this->type->id()],
      $web_user1
    ));

    // Create a new profile type.
    $this->container->get('current_user')->setAccount($web_user2);
    $second_type = $this->createProfileType('test2', 'Test2 profile', TRUE);
    $this->assertFalse($this->accessControlHandler->createAccess('test2', $web_user2));
    $this->assertFalse($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user2->id(), 'profile_type' => $second_type->id()],
      $web_user2
    ));

    // Test user with permission to only add any profile.
    $web_user3 = $this->createUser([], [
      "create {$this->type->id()} profile",
      "update own {$this->type->id()} profile",
    ]);
    $this->assertTrue($this->accessControlHandler->createAccess($this->type->id(), $web_user3));

    // Verify access through route.
    $this->container->get('current_user')->setAccount($web_user3);
    $this->assertTrue($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user3->id(), 'profile_type' => $this->type->id()],
      $web_user3
    ));
    $this->assertFalse($this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form.add',
      ['user' => $web_user2->id(), 'profile_type' => $this->type->id()],
      $web_user3
    ));
  }

  /**
   * Tests profile view access.
   */
  public function testProfileViewAccess() {
    // Setup users.
    $web_user1 = $this->createUser([], [
      'access user profiles',
      "view own {$this->type->id()} profile",
    ]);
    $web_user2 = $this->createUser([], [
      'access user profiles',
      "view any {$this->type->id()} profile",
    ]);

    // Setup profiles.
    $profile1 = Profile::create([
      'uid' => $web_user1->id(),
      'type' => $this->type->id(),
    ]);
    $profile1->save();
    $profile2 = Profile::create([
      'uid' => $web_user2->id(),
      'type' => $this->type->id(),
    ]);
    $profile2->save();

    // Test user1 can only view own profiles.
    $this->assertTrue($profile1->access('view', $web_user1));
    $this->assertFalse($profile2->access('view', $web_user1));

    // Test user2 can view any profiles.
    $this->assertTrue($profile1->access('view', $web_user2));
    $this->assertTrue($profile2->access('view', $web_user2));

    user_role_grant_permissions(AccountInterface::ANONYMOUS_ROLE, ["view own {$this->type->id()} profile"]);
    $this->assertFalse($profile1->access('view', User::getAnonymousUser()));
    $this->assertFalse($profile2->access('view', User::getAnonymousUser()));

    // @todo Fix in https://www.drupal.org/node/2820209
    user_role_grant_permissions(AccountInterface::ANONYMOUS_ROLE, ["view any {$this->type->id()} profile"]);
    // $this->assertTrue($profile1->access('view', User::getAnonymousUser()));
    // $this->assertTrue($profile2->access('view', User::getAnonymousUser()));
  }

  /**
   * Tests profile edit flow and permissions.
   */
  public function testProfileEditAccess() {
    // Setup users.
    $web_user1 = $this->createUser([], [
      "create {$this->type->id()} profile",
      "update own {$this->type->id()} profile",
    ]);
    $web_user2 = $this->createUser([], [
      "create {$this->type->id()} profile",
      "update any {$this->type->id()} profile",
    ]);

    // Setup profiles.
    $profile1 = Profile::create([
      'uid' => $web_user1->id(),
      'type' => $this->type->id(),
    ]);
    $profile1->save();
    $profile2 = Profile::create([
      'uid' => $web_user2->id(),
      'type' => $this->type->id(),
    ]);
    $profile2->save();

    // Test user1 can only edit own profiles.
    $this->assertTrue($profile1->access('update', $web_user1));
    $this->assertFalse($profile2->access('update', $web_user1));

    // Test user2 can edit any profiles.
    $this->assertTrue($profile1->access('update', $web_user2));
    $this->assertTrue($profile2->access('update', $web_user2));
  }

  /**
   * Tests the _profile_access_check access check.
   *
   * @dataProvider dataProfileAccessCheck
   *
   * @param array $permissions
   *   The test user's permissions.
   * @param $multiple_profiles
   *   The profile type should allow multiple profiles.
   * @param $assert_access_result
   *   The access result to assert.
   */
  public function testProfileAccessCheck(array $permissions, $multiple_profiles, $assert_access_result) {
    $type = ProfileType::create([
      'id' => 'test_access_check',
      'label' => 'Test',
      'multiple' => $multiple_profiles,
    ]);
    $type->save();

    // Test user without any permissions.
    $user = $this->createUser([], $permissions);
    $this->container->get('current_user')->setAccount($user);

    // Verify access through route.
    $this->assertEquals($assert_access_result, $this->accessManager->checkNamedRoute(
      'entity.profile.type.user_profile_form',
      ['user' => $user->id(), 'profile_type' => $type->id()],
      $user
    ));
  }

  /**
   * Data for ::testProfileAccessCheck
   */
  public function dataProfileAccessCheck() {
    yield [
      [],
      FALSE,
      FALSE,
    ];
    yield [
      ['view own test profile'],
      FALSE,
      FALSE,
    ];
    yield [
      ['view own test_access_check profile'],
      FALSE,
      FALSE,
    ];
    yield [
      ['view own test_access_check profile'],
      TRUE,
      TRUE,
    ];
    yield [
      ['update own test_access_check profile'],
      FALSE,
      TRUE,
    ];
    yield [
      ['update own test_access_check profile'],
      TRUE,
      FALSE,
    ];
    yield [
      [
        'view own test_access_check profile',
        'update own test_access_check profile'
      ],
      TRUE,
      TRUE,
    ];
    yield [
      [
        'administer profile',
      ],
      FALSE,
      TRUE,
    ];
    yield [
      [
        'administer profile',
      ],
      TRUE,
      TRUE,
    ];
  }
}
