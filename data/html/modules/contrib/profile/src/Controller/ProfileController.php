<?php

namespace Drupal\profile\Controller;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\profile\Entity\ProfileInterface;
use Drupal\profile\Entity\ProfileTypeInterface;
use Drupal\profile\Entity\Profile;
use Drupal\user\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for ProfileController routes.
 */
class ProfileController extends ControllerBase {

  /**
   * The time.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected $time;

  /**
   * Constructs a new ProfileController object.
   *
   * @param \Drupal\Component\Datetime\TimeInterface $time
   *   The time.
   */
  public function __construct(TimeInterface $time) {
    $this->time = $time;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('datetime.time')
    );
  }

  /**
   * Provides the profile submission form.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\user\UserInterface $user
   *   The user account.
   * @param \Drupal\profile\Entity\ProfileTypeInterface $profile_type
   *   The profile type entity for the profile.
   *
   * @return array
   *   A profile submission form.
   */
  public function addProfile(RouteMatchInterface $route_match, UserInterface $user, ProfileTypeInterface $profile_type) {
    $profile = $this->entityTypeManager()->getStorage('profile')->create([
      'uid' => $user->id(),
      'type' => $profile_type->id(),
    ]);

    return $this->entityFormBuilder()->getForm($profile, 'add', ['uid' => $user->id(), 'created' => $this->time->getRequestTime()]);
  }

  /**
   * Provides the profile edit form.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\user\UserInterface $user
   *   The user account.
   * @param \Drupal\profile\Entity\ProfileInterface $profile
   *   The profile entity to edit.
   *
   * @return array
   *   The profile edit form.
   */
  public function editProfile(RouteMatchInterface $route_match, UserInterface $user, ProfileInterface $profile) {
    return $this->entityFormBuilder()->getForm($profile, 'edit');
  }

  /**
   * Provides profile delete form.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\user\UserInterface $user
   *   The user account.
   * @param \Drupal\profile\Entity\ProfileTypeInterface $profile_type
   *   The profile type entity for the profile.
   * @param int $id
   *   The id of the profile to delete.
   *
   * @return array
   *   Returns form array.
   */
  public function deleteProfile(RouteMatchInterface $route_match, UserInterface $user, ProfileTypeInterface $profile_type, $id) {
    return $this->entityFormBuilder()->getForm(Profile::load($id), 'delete');
  }

  /**
   * The _title_callback for the user profile form route.
   *
   * @param \Drupal\profile\Entity\ProfileTypeInterface $profile_type
   *   The current profile type.
   *
   * @return string
   *   The page title.
   */
  public function userPageTitle(ProfileTypeInterface $profile_type) {
    if ($profile_type->allowsMultiple()) {
      return $profile_type->label();
    }

    return $this->t('Edit @label', [
      '@label' => $profile_type->label(),
    ]);
  }

  /**
   * The _title_callback for the add profile form route.
   *
   * @param \Drupal\profile\Entity\ProfileTypeInterface $profile_type
   *   The current profile type.
   *
   * @return string
   *   The page title.
   */
  public function addPageTitle(ProfileTypeInterface $profile_type) {
    return $this->t('Create @label', [
      '@label' => $profile_type->label(),
    ]);
  }

  /**
   * Provides profile create form.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   * @param \Drupal\user\UserInterface $user
   *   The user account.
   * @param \Drupal\profile\Entity\ProfileTypeInterface $profile_type
   *   The profile type entity for the profile.
   *
   * @return array
   *   Returns form array.
   */
  public function userProfileForm(RouteMatchInterface $route_match, UserInterface $user, ProfileTypeInterface $profile_type) {
    /** @var \Drupal\profile\Entity\ProfileType $profile_type */

    /** @var \Drupal\profile\Entity\ProfileInterface $active_profile */
    $active_profile = $this->entityTypeManager()
      ->getStorage('profile')
      ->loadByUser($user, $profile_type->id());

    // If the profile type does not support multiple, only display an add form
    // if there are no entities, or an edit for the current.
    if (!$profile_type->allowsMultiple()) {
      // If there is an active profile, provide edit form.
      if ($active_profile) {
        return $this->editProfile($route_match, $user, $active_profile);
      }

      // Else show the add form.
      return $this->addProfile($route_match, $user, $profile_type);
    }
    // Display active, and link to create a profile.
    else {
      $build = [];

      // If there is no active profile, display add form.
      if (!$active_profile) {
        return $this->addProfile($route_match, $user, $profile_type);
      }

      $build['add_profile'] = Link::createFromRoute(
        $this->t('Add new @type', ['@type' => $profile_type->label()]),
        'entity.profile.type.user_profile_form.add',
        ['user' => $user->id(), 'profile_type' => $profile_type->id()])
        ->toRenderable();

      // Render the active profiles.
      $build['active_profiles'] = [
        '#type' => 'view',
        '#name' => 'profiles',
        '#display_id' => 'profile_type_listing',
        '#arguments' => [$user->id(), $profile_type->id(), 1],
        '#embed' => TRUE,
        '#title' => $this->t('Active @type', ['@type' => $profile_type->label()]),
        '#pre_render' => [
          ['\Drupal\views\Element\View', 'preRenderViewElement'],
          'profile_views_add_title_pre_render',
        ],
      ];

      return $build;
    }
  }

  /**
   * Mark profile as default.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $routeMatch
   *   The route match.
   *
   * @return \Symfony\Component\HttpFoundation\RedirectResponse
   *   A redirect back to the currency listing.
   */
  public function setDefault(RouteMatchInterface $routeMatch) {
    /** @var \Drupal\profile\Entity\ProfileInterface $profile */
    $profile = $routeMatch->getParameter('profile');
    $profile->setDefault(TRUE);
    $profile->save();

    $this->messenger()->addMessage($this->t('The %label profile has been marked as default.', ['%label' => $profile->label()]));

    $url = $profile->toUrl('collection');
    return $this->redirect($url->getRouteName(), $url->getRouteParameters(), $url->getOptions());
  }

}
