@extends()
<?php 
  $id = $_GET['id'];

    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/getDataPanenById?id=' . $id,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_RETURNTRANSFER => true
    );

    curl_setopt_array($cUrl, $options);

    $response = curl_exec($cUrl);

    $data = json_decode($response);

    curl_close($cUrl);
?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"> Isikan Rencana Panen Anda</h4>

              <!-- Basic Layout -->
              <form action="../assets/php/save.php" method="GET">
                <input type="hidden" name="id" id="id" value ="<?= $data[0]->_id ?>">
                <div class="row">
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-body">
                        <form>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">JENIS PANEN</label>
                            <select name = "jenis_panen" id="jenis_panen" class="form-control">
                                <option><?= $data[0]->jenis_panen ?></option>
                                <option>PARSIAL</option>
                                <option>TOTAL</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">PERKIRAAN PANEN</label>
                            <input type="text" class="form-control" name = "perkiraan_panen" id="basic-default-company perkiraan_panen" placeholder="Pilih Tanggal" value ="<?= $data[0]->perkiraan_panen ?>" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">UKURAN PANEN</label>
                            <input type="text" class="form-control" name = "ukuran_panen" id="basic-default-company ukuran_panen" placeholder="20" value ="<?= $data[0]->ukuran_panen ?>"/>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-email">TONASE PANEN</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-text tonase_panen"
                                class="form-control"
                                placeholder="200"
                                name = "tonase_panen"
                                value ="<?= $data[0]->tonase_panen ?>"
                              />
                              <span class="input-group-text" id="basic-default-email2">Kg</span>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-email">USIA BUDIDAYA</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-text usia_panen"
                                class="form-control"
                                placeholder="30"
                                name = "usia_panen"
                                value ="<?= $data[0]->usia_budidaya ?>"
                              />
                              <span class="input-group-text" id="basic-default-email2">Hari</span>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-email">HARAPAN HARGA JUAL</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-money harga_panen"
                                class="form-control"
                                placeholder="Rp.200.000"
                                name = "harga_panen"
                                value ="<?= $data[0]->harga_harapan ?>"
                              />
                              <span class="input-group-text" id="basic-default-email2">/Kg</span>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-company">LOKASI BUDIDAYA</label>
                            <input type="text" class="form-control" name = "lokasi_panen" id="basic-default-company" placeholder="Jl. Kumbang 12"  value ="<?= $data[0]->lokasi_budidaya ?>"/>
                          </div>
                          <br><br>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

            </div>             
            <!-- / Content -->

          