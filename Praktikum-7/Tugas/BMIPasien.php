<?php
require_once 'BMI.php';


$psn1 = new BMI ("22-11-2021","AS-001","Adelia","P","Bekasi","1994-01-23","Adelia@gmail.com",56,167);
$psn2 = new BMI ("07-12-2021","AS-002","Nanda","L","Jakarta","1990-01-05","Nanda@gmail.com",78,175);
$psn3 = new BMI ("03-03-2022","AS-003","Firdaus","L","Jakarta","2002-12-27","Firdaus@gmail.com",90,182);


$dataBMI = [$psn1,$psn2,$psn3];


    $_tanggal = $_POST['periksa'];
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_gender = $_POST['gender'];
    $_tmp_lahir = $_POST['tempat'];
    $_tgl_lahir = $_POST['lahir'];
    $_email = $_POST['email'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];


$psn4 = new BMI($_tanggal,$_kode,$_nama,$_gender,$_tmp_lahir,$_tgl_lahir,$_email,$_berat,$_tinggi);

array_push($dataBMI,$psn4);


    
?>
<h2>Data Pasien BMI</h2>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Berat (kg)</th>
            <th>Tinggi (cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($dataBMI as $obj){

        ?>
        <tr>
        <td><?=$nomor?></td>
        <td><?=$obj->tanggal?></td>
        <td><?=$obj->kode?></td>
        <td><?=$obj->nama?></td>
        <td><?=$obj->gender?></td>
        <td><?=$obj->tmp_lahir?></td>
        <td><?=$obj->tgl_lahir?></td>
        <td><?=$obj->email?></td>
        <td><?=$obj->berat?></td>
        <td><?=$obj->tinggi?></td>
        <td><?=$nomor?></td>
        <td><?=$nomor?></td>
        </tr>
        <?php
        $nomor++;
        }
        ?>


    </tbody>
</table>