<?php 
require_once '../koneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location: ../index.php?krupuk=Table_KProduk/K_Produk');
?>