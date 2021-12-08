<!-- cek apakah sudah login -->
<?php session_start(); ?>
<?php include_once '../db/koneksi.php'; ?>
<?php 
if (empty($_SESSION['username'])) {
  echo "<script>alert('Anda Harus Masuk Dahulu !');</script>";
  echo "<script>window.location=(href='../index.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.css"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard | Admin</title>

    <!-- cdn fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="../assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style_user.css">

    <!--  -->
    
    
</head>
<!-- setting body -->
<style>
      html,body {
        width: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }  
      div.cap{
          text-transform: capitalize;
        }
    </style>
<body>

<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container"> 
    <a class="navbar-brand" href="index.php">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    Tes
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="data_ikm_.php">Data</a>
                <a class="nav-item nav-link active" href="metode_proses.php">Seleksi</a>
                <a class="nav-item nav-link active" href="data_kriteria.php">Info</a>
                <a class="nav-item btn btn-primary tombol" href="../logout.php">Logout</a>
            </div>
        </div>
    </div>
    </nav>
<!-- end navbar -->