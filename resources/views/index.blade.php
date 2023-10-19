@extends('templates')
@section('content')

          <!-- / Navbar -->

          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Congratulations Card -->
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Selamat Datang Kembali, Tambak Lodaya! 🎉</h5>
                          <p class="mb-4">
                            Anda aktif menggunakan aplikasi <span class="fw-bold">ShrimpFarm</span> selama 30 Hari Terakhir! Gunakan fitur lainnya untuk mendukung budidaya Anda.
                          </p>
                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Coba Sekarang</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 order-2">
                  <!-- Data Udang Card -->
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt3"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span class="fw-semibold d-block mb-1">Data Udang</span>
                      <h3 class="card-title mb-2">10 Jenis</h3>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 mb-4 order-2">
                  <!-- Data Tambak Card 1 -->
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt6"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span>Data Tambak</span>
                      <h3 class="card-title text-nowrap mb-1">30 Tambak</h3>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 mb-4 order-3">
                  <!-- Data Tambak Card 2 -->
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                          <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded" />
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="cardOpt6"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                      </div>
                      <span>Data Konsultasi</span>
                      <h3 class="card-title text-nowrap mb-1">2 X</h3>
                    </div>
                  </div>
                </div>
                
                
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Statistik To Do Anda</h5>
                        <small class="text-muted">20 Daftar Aktifitas Sudah Terlaksana</small>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-left gap-1">
                          <h2 class="mb-2">20</h2>
                          <span>Daftar Aktivitas Budidaya</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Fase Persiapan</h6>
                              <small class="text-muted">Peralatan, Tambak, Dsb</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">85%</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Fase Tebar Benih</h6>
                              <small class="text-muted">Tebar Benih pada kolam</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">50%</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Fase Budidaya T1</h6>
                              <small class="text-muted">Perawatan dan Pengelolaan</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">38%</small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Fase Budidaya T2</h6>
                              <small class="text-muted">Pengawasan Budidaya</small>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold">10%</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- PRODUCT OVERVIEW -->
          <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="{{asset('assets/img/products/s4.jpg')}}" class="card-img-top rounded-0" alt="..."></a>
                  <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                  <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="{{asset('assets/img/products/s5.jpg')}}" class="card-img-top rounded-0" alt="..."></a>
                  <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                  <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="{{asset('assets/img/products/s7.jpg')}}" class="card-img-top rounded-0" alt="..."></a>
                  <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                  <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="card overflow-hidden rounded-2">
                <div class="position-relative">
                  <a href="javascript:void(0)"><img src="{{asset('assets/img/products/s11.jpg')}}" class="card-img-top rounded-0" alt="..."></a>
                  <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
                <div class="card-body pt-3 p-4">
                  <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                  <div class="d-flex align-items-center justify-content-between">
                    <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                    <ul class="list-unstyled d-flex align-items-center mb-0">
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                      <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection