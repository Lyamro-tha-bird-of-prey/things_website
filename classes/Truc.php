<?php

namespace classes;
use libs/MachinTrucBidule;

class Truc extends MachinTrucBidule {
  private $truc = 666;
  private $truc_msg = "TRUC";

  public function __construct($tr) {
    $this->truc = $tr;
  }
  public function get_truc() {
    return $this->truc, $this->truc_msg;
  }
  public function set_truc_msg($msg) {
    $this->truc_msg = $msg;
  }
  public function truc_op() {
    $result = $truc % $this->mtb;
    return $result . $truc_msg;
  }
}
