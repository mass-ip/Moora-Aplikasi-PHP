<?php include_once 'atribut/head.php'; ?>
      <!-- begin:: content -->
      <div class="container-fluid t1">
        <div class="container-fluid">
        <div class="col-md-10 offset-md-1">
            <h6 class="text-uppercase"><b>Bobot dan Tipe Kriteria</b></h6>
              <!-- Solid divider -->
              <hr class="solid">
              <p class="text-capitalize">Tabel bobot & tipe kriteria berisi 6 kriteria, type kriteria (Benefit & cost), dan bobot dari masing-masing kriteria.</p>
        </div>
        <br>           
        <div class="row">
          <div class="col-md-6 offset-md-3">    
           <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight text-info"> <b>  Bobot dan Tipe Kriteria </b></h5>
                  </div>
                  <!-- <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="moo_kriteria_tambah.php">Tambah</a>
                  </div> -->
                </div>
              </div>
              <div class="card-body text-capitalize">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> No </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php

                      $query="SELECT * FROM moo_kriteria";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_kriteria']; ?></td>
                      <td align="center"><?php echo $row['kriteria']; ?></td>
                      <td align="center"><?php echo $row['type']; ?></td>
                      <td align="center"><?php echo $row['bobot']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-sm" href="moo_ubah.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                          </span>
                        </a>
                        <!-- <a class="btn btn-danger btn-sm" href="moo_kriteria_hapus.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-trash"></i>
                          </span>
                        </a> -->
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
          <br>
          
        
        


<?php include_once 'atribut/foot.php'; ?>