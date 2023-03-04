<form method="GET">
        Nama : <input type="text" name="nama" value="" size="30"/><br/>
        mata kuliah :
        <select name="matkul">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data</option>
            <option value="WEB1">Pemrograman web</option>
        </select><br/>
        Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"/><br/>
        Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"/><br/>
        Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas" value="" size="6"/><br/>
        <br>
        <button name="proses">Simpan</button>
</form>
<?php
    error_reporting(0);
    $proses = $_POST ["proses"];
    $nama_siswa = $_POST ["nama"];
    $mata_kuliah = $_POST ["matkul"];
    $nilai_uts = $_POST ["nilai_uts"];
    $nilai_uas = $_POST ["nilai_uas"];
    $nilai_tugas = $_POST ["nilai_tugas"];

   if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
 }
?>