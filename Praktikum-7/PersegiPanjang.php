<?php
class PersegiPanjang {
  private $panjang;
  private $lebar;

  public function __construct($panjang, $lebar) {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  public function getLuas() {
    return $this->panjang * $this->lebar;
  }

  public function getKeliling() {
    return 2 * ($this->panjang + $this->lebar);
  }
}
?>
