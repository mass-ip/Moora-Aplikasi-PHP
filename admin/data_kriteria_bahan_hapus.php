<?php
session_start();
include_once '../db/koneksi.php';

$id_bahan = $_GET['id_bahan'];
$sql           = "DELETE FROM kriteriabahan WHERE id_bahan = '$id_bahan' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
