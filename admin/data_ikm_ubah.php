<?php include_once 'atribut/head.php'; ?>

<?php
$id_ikm    = $_GET['id_ikm'];
$sql        = "SELECT * FROM data_ikm WHERE id_ikm = '$id_ikm'";
$query      = mysqli_query($konek, $sql);
$row        = mysqli_fetch_array($query);
?>

      <!-- Begin Page Content -->
      <div class="container-fluid t1">
        <!-- <div class="row"> -->
          <div class="container">
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-info"> <b> Ubah Data Alat Mining </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_ikm" value="<?php echo $row['id_ikm']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Pemilik</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="alternatif" value="<?php echo $row['alternatif']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Usaha</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="usaha" value="<?php echo $row['usaha']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Jenis Industri</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="jenis" value="<?php echo $row['jenis']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kecamatan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="kecamatan" value="<?php echo $row['kecamatan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Produk</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="produk" value="<?php echo $row['produk']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">SDM</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="sdm" value="<?php echo $row['sdm']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Bahan Baku</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="bahan_baku" value="<?php echo $row['produktivitas']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Penjualan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="penjualan" value="<?php echo $row['penjualan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Produktivitas</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="produktivitas" value="<?php echo $row['produktivitas']; ?>">
                  </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Lokasi</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="lokasi" value="<?php echo $row['lokasi']; ?>">
                  </div>
                </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_ikm_.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<?php
//proses Input
if (isset($_POST['simpan'])) {
  $id_ikm           = $_POST['id_ikm'];
  $alternatif       = $_POST['alternatif'];
  $usaha            = $_POST['usaha'];
  $jenis            = $_POST['jenis'];
  $kecamatan        = $_POST['kecamatan'];
  $produk           = $_POST['produk'];
  $sdm              = $_POST['sdm'];
  $bahan_baku       = $_POST['bahan_baku'];
  $produktivitas    = $_POST['produktivitas'];
  $penjualan        = $_POST['penjualan'];
  $lokasi           = $_POST['lokasi'];

  $query = "UPDATE data_ikm SET alternatif = '$alternatif', usaha = '$usaha', jenis = '$jenis', kecamatan = '$kecamatan', produk = '$produk', sdm = '$sdm', bahan_baku = '$bahan_baku', produktivitas = '$produktivitas', penjualan = '$penjualan', lokasi = '$lokasi' WHERE id_ikm = '$id_ikm'";
  $simpan = $konek->query($query);
  if ($simpan === true) {
    echo "<script>alert('Data Berhasil Di Ubah') </script>";
		echo "<script>window.location.href = \"data_ikm_.php\" </script>";
  }
  else {
    echo "<script>alert('Data Gagal Di Ubah') </script>";
		echo "<script>window.location.href = \"data_ikm_.php\" </script>";
  }
}
 ?>