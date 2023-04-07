<?php
require_once "PersegiPanjang.php";

$persegiPanjang1 = new PersegiPanjang(5, 10);
$persegiPanjang2 = new PersegiPanjang(6, 12);

echo "Luas: " . $persegiPanjang1->getLuas() . "<br>"; 
echo "Keliling: " . $persegiPanjang1->getKeliling() ."<br>";
echo "Luas: " . $persegiPanjang2->getLuas() . "<br>";
echo "Keliling: " . $persegiPanjang2->getKeliling();

?>