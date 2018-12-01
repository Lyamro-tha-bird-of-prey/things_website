<?php

namespace classes;
use libs/MachinTrucBidule;

class Bidule extends MachinTrucBidule {
  private $bidule = 1945;
  private $bidule_msg = "BIDULE";

  function __construct($bid) {
    $this->bidule = $bid;

  public function get_bidule() {
    return $this->bidule, $this->bidule_msg;
  }
  public function set_bidule_msg($msg) {
    $this->bidule_msg = $msg;
  }
  public function bidule_op() {
    $result = $bidule / $this->mtb;
    return $result . $machin_msg;
  }
}
