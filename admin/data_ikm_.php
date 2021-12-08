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
                    <h5 class="mt-2  font-weight text-info"> <b> Data </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_ikm_tambah.php">Tambah Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body text-capitalize">
                <table border="border-left-info" class="display table table-bordered nowrap" width="100%" cellspacing="0">
                  <thead align="center">
                    <th>No</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Usaha</th>
                    <th>Jenis Industri</th>
                    <th>Kecamatan</th>
                    <th>Produk</th>
                    <th>SDM</th>
                    <th>Bahan</th>
                    <th>Produktivitas</th>
                    <th>Penjualan</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody class="text-capitalize">
                    <?php
                      $query  = "SELECT * FROM data_ikm";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                        <td align="center"><?php echo $row['id_ikm']; ?></td>
                        <td align="center"><?php echo $row['alternatif']; ?></td>
                        <td align="center"><?php echo $row['usaha']; ?></td>
                        <td align="center"><?php echo $row['jenis']; ?></td>
                        <td align="center"><?php echo $row['kecamatan']; ?></td>
                        <td align="center"><?php echo $row['produk']; ?></td>
                        <td align="center"><?php echo $row['sdm']; ?></td>
                        <td align="center"><?php echo $row['bahan_baku']; ?></td>
                        <td align="center"><?php echo $row['produktivitas']; ?></td>
                        <td align="center"><?php echo $row['penjualan']; ?></td>
                        <td align="center"><?php echo $row['lokasi']; ?></td>
                        <td align="center">
                          <a class="btn btn-info btn-icon-split"
                            href="data_ikm_ubah.php?id_ikm=<?php echo $row['id_ikm'] ?>">
                            <span class="icon text-white">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a>
                          <a class="btn btn-danger btn-icon-split"
                            href="data_ikm_hapus.php?id_ikm=<?php echo $row['id_ikm'] ?>">
                            <span class="icon text-white">
                              <i class="fas fa-trash"></i>
                            </span>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

<?php include_once 'atribut/foot.php'; ?>