<?php
session_start();
include_once '../db/koneksi.php';

$id_ikm   = $_GET['id_ikm'];
$sql       = "DELETE FROM data_ikm WHERE id_ikm = '$id_ikm' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_ikm_.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_ikm_.php\" </script>";
}
 ?>
