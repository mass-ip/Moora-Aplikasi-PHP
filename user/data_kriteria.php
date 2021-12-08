<?php include_once 'atribut/head.php'; ?>
      <!-- begin:: content -->
      <div class="container-lg pt-4">
        <div class="container">
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
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> No </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
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