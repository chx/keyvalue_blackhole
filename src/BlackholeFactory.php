<?php

namespace Drupal\keyvalue_blackhole;


class BlackholeFactory {

  /**
   * An array of keyvalue collections that are stored in memory.
   *
   * @var array
   */
  protected $collections = [];

  /**
   * {@inheritdoc}
   */
  public function get($collection) {
    if (!isset($this->collections[$collection])) {
      $this->collections[$collection] = new Blackhole($collection);
    }
    return $this->collections[$collection];
  }

}
