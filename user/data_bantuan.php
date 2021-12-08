<?php include_once 'atribut/head.php'; ?>

<?php
//-- query untuk mendapatkan semua data kriteria di tabel moo_kriteria
$sql = 'SELECT * FROM moo_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$kriteria=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $kriteria[$row['id_kriteria']]=array($row['kriteria'],$row['type'],$row['bobot']);
}

//-- query untuk mendapatkan semua data kriteria di tabel moo_alternatif
$sql = 'SELECT * FROM data_ikm';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$alternatif=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   $alternatif[$row['id_ikm']] = array(
     $row['alternatif'],
     $row['produk'],
     $row['sdm'],
     $row['bahan_baku'],
     $row['produktivitas'],
     $row['penjualan'],
     $row['lokasi'],
   );
}

//-- query untuk mendapatkan semua data sample penilaian di tabel moo_nilai
$sql = 'SELECT * FROM moo_nilai ORDER BY id_ikm, id_kriteria';
$result = $konek->query($sql);
//-- menyiapkan variable penampung berupa array
$sample=array();
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($result as $row) {
   //-- jika array $sample[$row['id_alternatif']] belum ada maka buat baru
   //-- $row['id_alternatif'] adalah id kandidat/alternatif
   if (!isset($sample[$row['id_ikm']])) {
      $sample[$row['id_ikm']] = array();
   }
   $sample[$row['id_ikm']][$row['id_kriteria']] = $row['nilai'];
   }
  //  disimpan dalam array $sample
  //  echo json_encode($sample);
  //  die();



// kode perhitungan normalisasi
//-- inisialisasi (pemberian nilai awal) nilai normalisasi dengan nilai dari $sample
$normal = $sample;
foreach($kriteria as $id_kriteria=>$k){
   //-- inisialisasi (pemberian nilai awal) nilai pembagi tiap kriteria
   $pembagi=0;
      foreach($alternatif as $id_ikm=>$a){
      // dgn menggunakan pow(pangkat) dan nilai pangkat 2
      $pembagi+=pow($sample[$id_ikm][$id_kriteria],2);
      // menampilkan hasil pangkat 2 dari baris 1 kolom 1
      // echo json_encode($pembagi);
      // die();
   }
   foreach($alternatif as $id_ikm=>$a){
      // dibagi dengan akar kuadrat dengan /=sqrt
      $normal[$id_ikm][$id_kriteria]/=sqrt($pembagi);
      // setelah dicari pangkat 2 dari semua kriteria baris 1 kolom 1 dan di totalkan
      // kemudian dicari akar dari total baris 1 kolom 1
      // setelah dapat akar kemudian akar tersebut dibagi dengan kriteria baris 1 kolom 1
      // echo ('Total dari seluruh pangkat pada kolom 1');
      // echo '<br>';
      // echo json_encode($pembagi).'<br>'.'Akar dari kolom 1'.'<br>'.json_encode(sqrt($pembagi)).'<br>'.'Setelah didapatkan akar, selanjutnya akar dibagi baris 1 kolom 1'.'<br>'.json_encode($normal[$id_alternatif][$id_kriteria]);
      // die();
   }
  }

//-- menyiapkan variabel untuk menyimpan data yang sudah dioptimasi
$optimasi=array();
foreach($alternatif as $id_ikm=>$a){
   $optimasi[$id_ikm] = 0;
   foreach($kriteria as $id_kriteria => $k){
    // nilai normalisasi masing2 alternatif (benefit - cost) dikali bobot masing2 kriteria
    // kemudian hasil kali benefit dan cost (benefit - cost)
     $optimasi[$id_ikm] += $normal[$id_ikm][$id_kriteria] * ($k[1] == 'Benefit' ? 1 : -1) * $k[2];
    //  print_r($normal[$id_alternatif][$id_kriteria].'<br>'. json_encode($k).'<br>'.$optimasi[$id_alternatif]);
    //  die();
    }
    // if($k[1] == 'Benefit'){
    //   1
    // }else{
    //   -1
    // }
}
// echo json_encode($optimasi);
// die();
?>

<div class="container-lg pt-4">
    <div class="container">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> Hasil Moora </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
        <?php
        arsort($optimasi);
        $index = key($optimasi);
        $hasil_alternatif = empty($alternatif[$index][0]) ? 'Belum ada!' : $alternatif[$index][0];
        $hasil_optimasi = empty($optimasi[$index]) ? 'Belum ada!' : number_format($optimasi[$index],6);

        echo "Berdasarkan hasil penilaian sistem maka alternatif <b>".$hasil_alternatif."</b> ";
        echo "dengan nilai <b>".$hasil_optimasi."</b> yang terpilih untuk diprioritaskan mendapatkan bantuan";
        ?>
      </div>
    </div>
  </div>
</div>

<div class="container-lg pt-1">
    <div class="container">
  <div class="col-xl-12 col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header">
        <div class="row">
          <div class="col-lg-6 col-xl-6">
            <h5 class="mt-2 font-weight-bold text-info"> <b> List Hasil Akhir Penilaian </b></h5>
          </div>
        </div>
      </div>
      <div class="card-body">
      <p>List hasil akhir penilaian diurutkan berdasarkan nilai terbesar hingga terkecil</p>
        <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
          <thead align="center">
            <tr>
              <th>Alternatif</th>
              <th>Nilai Optimasi</th>
            </tr>
          </thead>
          <tbody align="center">
            <?php
              foreach ($optimasi as $key => $value) {
                echo "<tr>";
                echo "<td>".$alternatif[$key][0]."</td>";
                $angka_format = number_format($value,6);
                echo "<td>" .$angka_format. "</td>";
                echo "</tr>";
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
</div>

<?php include_once 'atribut/foot.php'; ?>