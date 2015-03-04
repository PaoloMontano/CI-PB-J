<?php

class Eats extends MY_Model {

  var $title;

  // Constructor
  public function __construct() {
    parent::__construct('eats', 'id');
  }

  public function add($record) {
  }

  public function getAll() {
  }

  // retrive the top three restaurants
  public function topThree() {
    return array();
  }

  // retrieve the first restaurant
  public function first() {
  }

  // retrieve the last restaurant
  public function last() {
    $key = $this->highest();
    return $this->get($key);
  }

}
