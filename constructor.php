<?php
class tugas {
  public $minum;
  public $gelas;

  function __construct($minum) {
    $this->minum = $minum;
  }
  function get_minum() {
    return $this->minum;
  }
}

$minum = new tugas("12 Gelas Sehari");
echo $minum->get_minum();
?>