<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keterangan nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-primary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center pt-3 pb-2">Form Nilai Siswa</h1>
                <form class="row" method="POST">
                    <div class="col-12 mb-2">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="inputState" class="form-label">Mata Kuliah</label>
                        <select name="matkul" class="form-select">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                    </div>
                    <div class="col-md-12 col- mb-2">
                        <label class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" name="nilai_uts" value="" placeholder="Nilai UTS">
                    </div>
                    <div class="col-md-12 col- mb-2">
                        <label class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" name="nilai_uas" value="" placeholder="Nilai UAS">
                    </div>
                    <div class="col-md-12 mb-2">
                        <label class="form-label">Nilai Tugas/Praktikum</label>
                        <input type="text" class="form-control" name="nilai_tugas" value="" placeholder="Nilai Tugas">
                    </div>
                    <div class="col-1 mx-lg-auto">
                        <input type="submit" value="Simpan" name="proses" class="btn btn-primary px-4">
                    </div>
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