<?php
session_start();
include_once '../db/koneksi.php';

$id_lokasi = $_GET['id_lokasi'];
$sql           = "DELETE FROM kriterialokasi WHERE id_lokasi = '$id_lokasi' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
