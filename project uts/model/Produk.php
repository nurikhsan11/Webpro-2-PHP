<?php
class Produk {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataProduk() {
        $sql = "SELECT * FROM produk";
        $q = $this->koneksi->prepare($sql);
        $q->execute();
        $data = $q->fetchAll();
        return $data;
    }
    public function dataPelangganID($id) {
        $sql = "SELECT * FROM produk WHERE id = ?";
        $q = $this->koneksi->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch();
        return $data;
    }
}


?>