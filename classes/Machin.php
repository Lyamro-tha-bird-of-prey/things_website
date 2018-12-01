<?php

namespace classes;
use libs/MachinTrucBidule;

class Machin extends MachinTrucBidule {
  private $machin = 13;
  private $machin_msg = "BIDULE";

  public function __construct($mach){
    $this->machin = $mach;
  }
  public function get_machin() {
    return $this->machin, $this->machin_msg;
  }
  public function set_machin_msg($msg) {
    $this->machin_msg = $msg;
  }
  public function machin_op() {
    $result = $machin ** $this->mtb;
    return $result . $machin_msg;
  }
}
