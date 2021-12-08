<?php
session_start();
include_once '../db/koneksi.php';

$id_penjualan = $_GET['id_penjualan'];
$sql           = "DELETE FROM kriteriapenjualan WHERE id_penjualan = '$id_penjualan' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
