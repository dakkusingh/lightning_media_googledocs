<?php

namespace Drupal\lightning_media_googledocs\Plugin\MediaEntity\Type;

use Drupal\lightning_media\InputMatchInterface;
use Drupal\lightning_media\SourceFieldInterface;
use Drupal\lightning_media\SourceFieldPluginTrait;
use Drupal\lightning_media\ValidationConstraintMatchTrait;
use Drupal\media_entity_googledocs\Plugin\MediaEntity\Type\GoogleDocs as BaseGoogleDocs;

/**
 * Input-matching version of the Google document media type.
 */
class GoogleDocs extends BaseGoogleDocs implements InputMatchInterface, SourceFieldInterface {

  use ValidationConstraintMatchTrait;
  use SourceFieldPluginTrait;

}
