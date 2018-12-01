<?php

class MachinTrucBidule {
  protected $mtb = 3.14;

  public function __construct($set_mtb) {
    $this->mtb = $set_mtb;
  }
  public function get_primary_thing() {
    return $this->mtb;
  }
}
