<?php
session_start();
include_once '../db/koneksi.php';

$id_produktivitas = $_GET['id_produktivitas'];
$sql           = "DELETE FROM kriteriaproduktivitas WHERE id_produktivitas = '$id_produktivitas' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
