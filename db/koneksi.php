<?php
	//-- konfigurasi database
	$host     = 'localhost';
	$user     = 'root';
  $password = '';
  $db       = 'applocal';

  //-- koneksi ke database server dengan extension mysqli
  // memiliki empat parameter yang pertama adalah host yang kita gunakan, dalam hal ini kita masih menggunakan localhost karena masih server lokal
  $konek = new mysqli($host,$user,$password,$db);
  //-- hentikan program dan tampilkan pesan kesalahan jika koneksi gagal
  if ($konek->connect_errno) {
    echo "gagal". $konek->connect_errno;}
  else {
    //echo "berhasil";
  }
 ?>
