<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keterangan nilai</title>
</head>
<body>
    <h1>Form Nilai Siswa</h1>
    <form method="POST">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" value="" placeholder="Nama Lengkap">
        <br>
        <label>Mata Kuliah</label>
        <select name="matkul" class="form-select">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data</option>
            <option value="WEB1">Pemrograman Web</option>
        </select>
        <br>
        <label>Nilai UTS</label>
        <input type="text" name="nilai_uts" value="" placeholder="Nilai UTS">
        <br>
        <label>Nilai UAS</label>
        <input type="text" name="nilai_uas" value="" placeholder="Nilai UAS">
        <br>
        <label>Nilai Tugas/Praktikum</label>
        <input type="text" name="nilai_tugas" value="" placeholder="Nilai Tugas">
        <br>
        <input type="submit" value="Simpan" name="proses">
    </form>
    <?php
   error_reporting(0);
   $proses = $_POST['proses'];
   $nama = $_POST ["nama"];
   $mata_kuliah = $_POST["matkul"];
   $nilai_uts = $_POST ["nilai_uts"];
   $nilai_uas = $_POST ["nilai_uas"];
   $nilai_tugas = $_POST ["nilai_tugas"];
   $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

   if(!empty($proses)){
   echo '<br> Nama : ' . $nama;
   echo '<br>  Mata Kuliah : ' . $mata_kuliah;
   echo '<br> Nilai UTS: ' . $nilai_uts;
   echo '<br> Nilai UAS : ' . $nilai_uas;
   echo '<br> Nilai Tugas Praktikum : ' . $nilai_tugas;
  }

    if ($nilai_total >= 85 && $nilai_total <=100) {
      $grade = "A";
  } elseif ($nilai_total >= 70 && $nilai_total <=84) {
      $grade = "B";
  } elseif ($nilai_total >= 56 && $nilai_total <=69) {
      $grade = "C";
  } elseif ($nilai_total >= 36 && $nilai_total <=55) {
      $grade = "D";
  } elseif ($nilai_total >= 0 && $nilai_total <=35) {
      $grade = "E";
  } else {
      $grade = "I";
  }

    switch ($grade) {
       case 'A':
            $predikat = 'Sangat Baik';
            break;
       case 'B':
           $predikat = 'Baik';
           break;
       case 'C':
           $predikat = 'Cukup';
           break;
       case 'D':
           $predikat = 'Kurang Baik';
           break;
       case 'E':
           $predikat = 'Tidak Baik';
           break;
       
       default:
           $predikat = 'Tidak ada';
   }

   if(!empty($proses)) {
       echo '<br> Nilai Total : ' . $nilai_total;
       echo '<br> Grade Nilai : ' . $grade;
       echo '<br> Prediikat : ' . $predikat;
   }

   if ($nilai_total >= 55) {
       echo "<br> Siswa Dinyatakan Lulus!!!";
   }
   elseif(!empty($nilai_total)) {
       echo " <br> Siswa Dinyatakan Tidak Lulus!!";
   }
   ?>
</body>

</html>