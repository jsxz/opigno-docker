<?php

namespace Drupal\profile\Entity;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Entity\EditorialContentEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\profile\EntityOwnerTrait;
use Drupal\profile\Event\ProfileEvents;
use Drupal\profile\Event\ProfileLabelEvent;

/**
 * Defines the profile entity class.
 *
 * @ContentEntityType(
 *   id = "profile",
 *   label = @Translation("Profile"),
 *   bundle_label = @Translation("Profile"),
 *   handlers = {
 *     "storage" = "Drupal\profile\ProfileStorage",
 *     "storage_schema" = "Drupal\profile\ProfileStorageSchema",
 *     "view_builder" = "Drupal\profile\ProfileViewBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "access" = "Drupal\profile\ProfileAccessControlHandler",
 *     "permission_provider" = "Drupal\entity\UncacheableEntityPermissionProvider",
 *     "query_access" = "Drupal\entity\QueryAccess\UncacheableQueryAccessHandler",
 *     "list_builder" = "Drupal\profile\ProfileListBuilder",
 *     "form" = {
 *       "default" = "Drupal\profile\Form\ProfileForm",
 *       "add" = "Drupal\profile\Form\ProfileForm",
 *       "edit" = "Drupal\profile\Form\ProfileForm",
 *       "delete" = "Drupal\profile\Form\ProfileDeleteForm",
 *       "delete-multiple-confirm" = "Drupal\Core\Entity\Form\DeleteMultipleForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   bundle_entity_type = "profile_type",
 *   field_ui_base_route = "entity.profile_type.edit_form",
 *   admin_permission = "administer profile",
 *   permission_granularity = "bundle",
 *   base_table = "profile",
 *   revision_table = "profile_revision",
 *   fieldable = TRUE,
 *   show_revision_ui = TRUE,
 *   entity_keys = {
 *     "id" = "profile_id",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "published" = "status",
 *     "owner" = "uid",
 *     "uid" = "uid",
 *     "uuid" = "uuid"
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message"
 *   },
 *  links = {
 *    "canonical" = "/profile/{profile}",
 *    "edit-form" = "/profile/{profile}/edit",
 *    "delete-form" = "/profile/{profile}/delete",
 *    "delete-multiple-form" = "/admin/content/profile/delete",
 *    "collection" = "/admin/people/profiles",
 *    "set-default" = "/profile/{profile}/set-default"
 *   },
 *   common_reference_target = TRUE,
 * )
 */
class Profile extends EditorialContentEntityBase implements ProfileInterface {

  use EntityOwnerTrait;
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function label() {
    $profile_type = ProfileType::load($this->bundle());
    $label = $this->t('@type profile #@id', [
      '@type' => $profile_type->label(),
      '@id' => $this->id(),
    ]);
    // Allow the label to be overridden.
    $event = new ProfileLabelEvent($this, $label);
    $event_dispatcher = \Drupal::service('event_dispatcher');
    $event_dispatcher->dispatch(ProfileEvents::PROFILE_LABEL, $event);
    $label = $event->getLabel();

    return $label;
  }

  /**
   * {@inheritdoc}
   */
  public function isActive() {
    return $this->isPublished();
  }

  /**
   * {@inheritdoc}
   */
  public function setActive($active) {
    if ((bool) $active) {
      $this->setPublished();
    }
    else {
      $this->setUnpublished();
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function isDefault() {
    return (bool) $this->get('is_default')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setDefault($is_default) {
    $this->set('is_default', (bool) $is_default);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getData($key, $default = NULL) {
    $data = [];
    if (!$this->get('data')->isEmpty()) {
      $data = $this->get('data')->first()->getValue();
    }
    return isset($data[$key]) ? $data[$key] : $default;
  }

  /**
   * {@inheritdoc}
   */
  public function setData($key, $value) {
    $this->get('data')->__set($key, $value);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function unsetData($key) {
    if (!$this->get('data')->isEmpty()) {
      $data = $this->get('data')->first()->getValue();
      unset($data[$key]);
      $this->set('data', $data);
    }
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getRevisionAuthor() {
    return $this->get('revision_uid')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function setRevisionAuthorId($uid) {
    $this->set('revision_uid', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTagsToInvalidate() {
    $tags = parent::getCacheTagsToInvalidate();
    return Cache::mergeTags($tags, [
      'user:' . $this->getOwnerId(),
      'user_view',
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function populateFromProfile(ProfileInterface $profile, array $field_names = []) {
    // Transfer all configurable fields by default.
    if (empty($field_names)) {
      foreach ($profile->getFieldDefinitions() as $field_name => $definition) {
        if (!($definition instanceof BaseFieldDefinition)) {
          $field_names[] = $field_name;
        }
      }
    }
    $profile_values = $profile->toArray();
    foreach ($field_names as $field_name) {
      if (isset($profile_values[$field_name]) && $this->hasField($field_name)) {
        $this->set($field_name, $profile_values[$field_name]);
      }
    }

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    /** @var \Drupal\profile\ProfileStorage $storage */
    parent::preSave($storage);

    // If this profile is active and the owner has no current default profile
    // of this type, set this as the default.
    if ($this->getOwnerId() > 0) {
      if ($this->isPublished() && !$this->isDefault()) {
        if (!$storage->loadDefaultByUser($this->getOwner(), $this->bundle())) {
          $this->setDefault(TRUE);
        }
      }
      // Only active profiles can be default.
      elseif (!$this->isPublished()) {
        $this->setDefault(FALSE);
      }
    }
    // If no revision author has been set explicitly, make the profile owner
    // the revision author.
    if (!$this->getRevisionUser()) {
      $this->setRevisionUserId($this->getOwnerId());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(EntityStorageInterface $storage, $update = TRUE) {
    /** @var \Drupal\profile\ProfileStorage $storage */
    parent::postSave($storage, $update);

    // Check if this profile is, or became the default.
    if ($this->getOwnerId() > 0) {
      if ($this->isDefault()) {
        /** @var \Drupal\profile\Entity\ProfileInterface[] $profiles */
        $profiles = $storage->loadMultipleByUser($this->getOwner(), $this->bundle());

        // Ensure that all other profiles are set to not default.
        foreach ($profiles as $profile) {
          if ($profile->id() != $this->id() && $profile->isDefault()) {
            $profile->setDefault(FALSE);
            $profile->save();
          }
        }
      }
      // If this isn't the default, try to set a new one.
      elseif (!$storage->loadDefaultByUser($this->getOwner(), $this->bundle())) {
        /** @var \Drupal\profile\Entity\ProfileInterface $profile */
        if ($profile = $storage->loadByUser($this->getOwner(), $this->bundle())) {
          $profile->setDefault(TRUE);
          $profile->save();
        }
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields += static::ownerBaseFieldDefinitions($entity_type);

    $fields['uid']
      ->setRevisionable(TRUE)
      ->setLabel(t('Owner'))
      ->setDescription(t('The user that owns this profile.'))
      ->setSetting('handler', 'default');

    $fields['status']
      ->setLabel(t('Active'))
      ->setDescription(t('Whether the profile is active.'));

    $fields['is_default'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Default'))
      ->setDescription(t('Whether this is the default profile.'))
      ->setRevisionable(TRUE);

    $fields['data'] = BaseFieldDefinition::create('map')
      ->setLabel(t('Data'))
      ->setDescription(t('A serialized array of additional data.'))
      ->setRevisionable(TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time when the profile was created.'))
      ->setRevisionable(TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time when the profile was last edited.'))
      ->setRevisionable(TRUE);

    return $fields;
  }

}
