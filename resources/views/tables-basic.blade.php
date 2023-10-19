@extends('templates')
@section('content')
<?php
    $cUrl = curl_init();

    $options = array(
        CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/getAllInfoBudidaya',
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_RETURNTRANSFER => true
    );

    curl_setopt_array($cUrl, $options);

    $response = curl_exec($cUrl);

    $data = json_decode($response, true);

    curl_close($cUrl);
    
    ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Rencana Panen</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Daftar Rencana Panen</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID Panen</th>
                        <th>Jenis Panen</th>
                        <th>Perkiraan Panen</th>
                        <th>Ukuran Panen</th>
                        <th>Tonase Panen</th>
                        <th>Usia Budidaya</th>
                        <th>Harapan Harga Jual</th>
                        <th>Lokasi Tambak</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;

                        $cUrl = curl_init();

                        $options = array(
                            CURLOPT_URL => 'https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/getAllDataPanen',
                            CURLOPT_CUSTOMREQUEST => 'GET',
                            CURLOPT_RETURNTRANSFER => true
                        );

                        curl_setopt_array($cUrl, $options);

                        $response = curl_exec($cUrl);

                        $data = json_decode($response);

                        curl_close($cUrl);

                            foreach ($data as $index){
                                echo '<tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>'.$index->_id.'</strong> </td>
                                        <td><span class="badge bg-label-primary me-1">'.$index->jenis_panen.'</span></td>
                                        <td><span class="d-flex align-items-center"><i class="bi bi-calendar-date me-2"></i>'.$index->perkiraan_panen.'</span></td>
                                        <td>'.$index->ukuran_panen.'</td>
                                        <td>'.(empty($index->tonase_panen) ? '' : $index->tonase_panen).'</td>
                                        <td>'.(empty($index->usia_budidaya) ? '' : $index->usia_budidaya).'</td>
                                        <td>'.$index->harga_harapan.'</td>
                                        <td>'.(empty($index->lokasi_budidaya) ? '' : $index->lokasi_budidaya).'</td>
                                        <td>
                                          <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="javascript:void(0);"  id="btnupdate" data-id="'.(empty($index->_id) ? '' : $index->_id).'"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                              <a class="dropdown-item" href="javascript:void(0);" id="btndelete" data-id="'.(empty($index->_id) ? '' : $index->_id).'"><i class="bx bx-trash me-1"></i> Delete</a>                                          </div>
                                          </div>
                                        </td>
                                    </tr>';
                            }
                      ?>
                    </tbody>
                  </table>
                </div>

              <hr class="my-5" />

@endsection
