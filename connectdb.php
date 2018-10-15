<?php
session_start();
require_once ("db.php");

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$program_studi  = $_POST['program_studi'];
$fakultas       = $_POST['fakultas'];
$asal           = $_POST['asal'];
$moto           = $_POST['moto'];

$sql = "insert into datamhs (nim, nama, jenis_kelamin, program_studi,fakultas, asal, moto)
        value ('$nim', '$nama', '$jenis_kelamin', '$program_studi', '$fakultas', '$asal', '$moto')";

if (mysqli_query($conn, $sql)) {
  echo "Berhasil terhubung ke database $db <br>";
} else {
  echo "error".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
echo "silhakan klik <a href='haldata.php'>link</a> untuk melihat data</a>";
?>
