<?php
require_once 'Pasien.php';



class BMI extends Pasien{
    public $berat;
    public $tinggi;
    

    function __construct($tanggal,$kode,$nama,$gender,$tmp_lahir,$tgl_lahir,$email,$berat,$tinggi){
        parent::__construct($tanggal,$kode,$nama,$gender,$tmp_lahir,$tgl_lahir,$email);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
}
?>