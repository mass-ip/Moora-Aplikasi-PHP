<?php
session_start();
include_once '../db/koneksi.php';

$id_sdm = $_GET['id_sdm'];
$sql           = "DELETE FROM kriteriasdm WHERE id_sdm = '$id_sdm' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
