<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT MAX(id_ikm) AS maxid FROM data_ikm";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
  $nilkod  = $datkod['maxid'];
  $kode    = $nilkod + 1;
  $kodeoto = $kode;
} else {
  $kodeoto = "1";
}
?>

      <!-- Begin Page Content -->
      <div class="container-fluid t1">
      <div class="container">
      <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="mt-2"> <b> Tambah Data IKM </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_ikm" value="<?= $kodeoto ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Pemilik</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" placeholder="Nama Pemilik" name="alternatif" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Usaha</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" placeholder="Nama Usaha" name="usaha" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Jenis Industri</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" placeholder="Jenis Industri (kue, kerajinan tangan, dll)" name="jenis" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kecamatan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" placeholder="Masukan Kecamatan" name="kecamatan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Produk</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="produk" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">SDM</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="sdm" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Bahan Baku</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="bahan_baku" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Produktivitas</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="produktivitas" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Penjualan</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="penjualan" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Lokasi</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" type="number" name="lokasi" required>
                    <option value="">-- pilih input --</option>
                    <option>sangat baik</option>
                    <option>baik</option>
                    <option>cukup</option>
                    <option>buruk</option>
                    <option>sangat buruk</option>
                    </select>
                  </div>
                </div>
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_ikm_.php" class="btn btn-danger">Batal</a>
              </form>
            </div>
          </div>
        </div>
      </div>

<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['simpan'])) {

  $id_ikm         = $_POST['id_ikm'];
  $alternatif     = $_POST['alternatif'];
  $usaha          = $_POST['usaha'];
  $jenis          = $_POST['jenis'];
  $kecamatan      = $_POST['kecamatan'];
  $produk         = $_POST['produk'];
  $sdm            = $_POST['sdm'];
  $bahan_baku     = $_POST['bahan_baku'];
  $produktivitas  = $_POST['produktivitas'];
  $penjualan      = $_POST['penjualan'];
  $lokasi         = $_POST['lokasi'];

  $sql_ikm   = "SELECT * FROM data_ikm WHERE alternatif = '$alternatif'";
  $query_ikm = $konek->query($sql_ikm);
  $cek_ikm   = $query_ikm->num_rows;

  if ($cek_ikm > 0) {
    echo "<script>alert('Data Sudah Ada!') </script>";
    echo "<script>window.location.href = \"data_ikm_tambah.php\" </script>";
  } else {
    $query  = "INSERT INTO data_ikm (id_ikm, alternatif, usaha, jenis, kecamatan, produk, sdm, bahan_baku, produktivitas, penjualan, lokasi) VALUES ('$id_ikm', '$alternatif', '$usaha', '$jenis', '$kecamatan', '$produk', '$sdm','$bahan_baku','$produktivitas', '$penjualan', '$lokasi')";
    $tambah = $konek->query($query);
    if ($tambah == true) {
      echo "<script>alert('Data Berhasil Di Tambah') </script>";
      echo "<script>window.location.href = \"data_ikm_.php\" </script>";
    }
    else {
      echo "<script>alert('Data Gagal Di Tambah') </script>";
      echo "<script>window.location.href = \"data_ikm_.php\" </script>";
    } 
  }
}
?>