<?php

namespace Drupal\keyvalue_blackhole;

use Drupal\Core\KeyValueStore\MemoryStorage;

class Blackhole extends MemoryStorage {

  /**
   * {@inheritdoc}
   */
  public function set($key, $value) {
  }

  public function setIfNotExists($key, $value) {
    throw new \LogicException('Makes no sense');
  }

  public function setMultiple(array $data) {
  }

  public function rename($key, $new_key) {
  }

}
