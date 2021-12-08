<?php include_once 'atribut/head.php'; ?>

      <!-- begin:: content -->
      <div class="container-fluid t1">
        <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight text-info"> <b> Proses Moora </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <form method="post">
                      <input type="submit" name="proses" value="Penilaian" class="btn btn-success">
                    </form>
                  </div>
                </div>
              </div>

              <?php include_once 'metode_hasil.php'; ?>

            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- end:: content -->

<?php include_once 'atribut/foot.php'; ?>

<?php
// memeriksa proses 
if (isset($_POST['proses'])) {

  $moo_nilai = "TRUNCATE TABLE moo_nilai";
  $konek->query($moo_nilai);

  // menghubungkan ke db tabel data_ikm
  $sql    = "SELECT * FROM data_ikm";
  $result = $konek->query($sql);

  // buat data array baru dg nama data_post
  // dgn perulangan while, maka isi dari array data_post sama dg di bwh
  $data_post = [];
  
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data_post[] = array(
      'id_ikm'                => $row['id_ikm'],
      'id_ikm'                => $row['id_ikm'],
      'alternatif'            => $row['alternatif'],
      'produk'                => $row['produk'],
      'sdm'                   => $row['sdm'],
      'bahan_baku'            => $row['bahan_baku'],
      'produktivitas'         => $row['produktivitas'],
      'penjualan'             => $row['penjualan'],
      'lokasi'                => $row['lokasi']
    );
  }

  // echo json_encode($data_post);
  //   die();

  // menghubungkan ke db tabel moo_kriteria
  $query_k = $konek->query('SELECT * FROM moo_kriteria');
  // buat array kosong id_kriteria
  $id_kriteria = [];
  while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
    $id_kriteria[] = $row_k['id_kriteria'];
  }

  // 
  foreach ($data_post as $key => $value) {

    if ($value['produk'] == "sangat buruk") {
      $produk_hasil = 10;
    } else if ($value['produk'] == "buruk") {
      $produk_hasil = 20;
    } else if ($value['produk'] == "cukup") {
      $produk_hasil = 30;
    } else if ($value['produk'] == "baik") {
      $produk_hasil = 40;
    } else if ($value['produk'] == "sangat baik") {
      $produk_hasil = 50;
    } 

    if ($value['sdm'] == "sangat buruk") {
      $sdm_hasil = 10;
    } else if ($value['sdm'] == "buruk") {
      $sdm_hasil = 20;
    } else if ($value['sdm'] == "cukup") {
      $sdm_hasil = 30;
    } else if ($value['sdm'] == "baik") {
      $sdm_hasil = 40;
    } else if ($value['sdm'] == "sangat baik") {
      $sdm_hasil = 50;
    } 

    if ($value['bahan_baku'] == "sangat buruk") {
      $bahan_hasil = 10;
    } else if ($value['bahan_baku'] == "buruk") {
      $bahan_hasil = 20;
    } else if ($value['bahan_baku'] == "cukup") {
      $bahan_hasil = 30;
    } else if ($value['bahan_baku'] == "baik") {
      $bahan_hasil = 40;
    } else if ($value['bahan_baku'] == "sangat baik") {
      $bahan_hasil = 50;
    } 

    if ($value['produktivitas'] == "sangat buruk") {
      $produktivitas_hasil = 10;
    } else if ($value['produktivitas'] == "buruk") {
      $produktivitas_hasil = 20;
    } else if ($value['produktivitas'] == "cukup") {
      $produktivitas_hasil = 30;
    } else if ($value['produktivitas'] == "baik") {
      $produktivitas_hasil = 40;
    } else if ($value['produktivitas'] == "sangat baik") {
      $produktivitas_hasil = 50;
    }

    if ($value['penjualan'] == "sangat buruk") {
        $penjualan_hasil = 10;
      } else if ($value['penjualan'] == "buruk") {
        $penjualan_hasil = 20;
      } else if ($value['penjualan'] == "cukup") {
        $penjualan_hasil = 30;
      } else if ($value['penjualan'] == "baik") {
        $penjualan_hasil = 40;
      } else if ($value['penjualan'] == "sangat baik") {
        $penjualan_hasil = 50;
      } 

      if ($value['lokasi'] == "sangat baik") {
        $lokasi_hasil = 10;
      } else if ($value['lokasi'] == "baik") {
        $lokasi_hasil = 20;
      } else if ($value['lokasi'] == "cukup") {
        $lokasi_hasil = 30;
      } else if ($value['lokasi'] == "buruk") {
        $lokasi_hasil = 40;
      } else if ($value['lokasi'] == "sangat buruk") {
        $lokasi_hasil = 50;
      } 

    // hasil diatas dlm array $nilai
    $nilai = array(
      $produk_hasil,
      $sdm_hasil,
      $bahan_hasil,
      $produktivitas_hasil,
      $penjualan_hasil,
      $lokasi_hasil
    );

    // // hasil diatas disimpan dalam moo_alternatif
    // $sql = "INSERT INTO moo_alternatif (id_alternatif, id_ikm, alternatif, produk, sdm, bahan_baku, produktivitas, penjualan, lokasi) VALUES ('$value[id_alternatif]', '$value[id_ikm]', '$value[alternatif]', '$value[produk]', '$value[sdm]', '$value[bahan_baku]', '$value[produktivitas]', '$value[penjualan]', '$value[lokasi]')";
    // $konek->query($sql);

    for ($i = 0; $i < count($id_kriteria); $i++) {
      $sql = "INSERT INTO moo_nilai (id_ikm, id_kriteria, nilai) VALUES ('$value[id_ikm]','$id_kriteria[$i]','$nilai[$i]')";
      $query = $konek->query($sql);
    }

  }

  if ($query) {
    echo "<script>alert('Berhasil !');</script>";
    echo "<script>window.location.href = \"metode_proses.php\"</script>";
  } else {
    echo "<script>alert('gagal !');</script>";
  }               
}
?>