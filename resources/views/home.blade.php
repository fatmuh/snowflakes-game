@extends('layouts.app')

@section('title')
    <title>Snowflakes - Beranda</title>
@endsection

@section('breadcumbs')
    <a href="{{ route('home') }}">Dashboard</a>
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome {{ auth()->user()->name }}! 🎉</h5>
                                <p>
                                    Anda memiliki <span class="fw-bold">{{ $pending }}</span> pesanan yang belum dikerjakan. dan memiliki <span class="fw-bold">{{ $proses }}</span> yang masih diproses.
                                </p>
                                <p class="mb-4">
                                    Total Transaksi Selesai : <span class="fw-bold">{{ $selesai }}</span>
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets2/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="card-info">
                      <p class="card-text">Total Game</p>
                      <div class="d-flex align-items-end mb-2">
                        <h4 class="card-title mb-0 me-2">{{ $game }}</h4>
                      </div>
                    </div>
                    <div class="card-icon">
                      <span class="badge bg-label-primary rounded p-2">
                        <i class='bx bx-game bx-sm'></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="card-info">
                      <p class="card-text">Total Produk</p>
                      <div class="d-flex align-items-end mb-2">
                        <h4 class="card-title mb-0 me-2">{{ $produk }}</h4>
                      </div>
                    </div>
                    <div class="card-icon">
                      <span class="badge bg-label-info rounded p-2">
                        <i class='bx bx-box bx-sm'></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="card-info">
                      <p class="card-text">Total Pesanan</p>
                      <div class="d-flex align-items-end mb-2">
                        <h4 class="card-title mb-0 me-2">{{ $payment }}</h4>
                      </div>
                    </div>
                    <div class="card-icon">
                      <span class="badge bg-label-danger rounded p-2">
                        <i class='bx bx-cart bx-sm'></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="card-info">
                      <p class="card-text">Pendapatan <b>({{ date('M Y') }})</b></p>
                      <div class="d-flex align-items-end mb-2">
                        <h4 class="card-title mb-0 me-2">{{ "Rp".number_format($totalPendapatan,2,',','.') }}</h4>
                      </div>
                    </div>
                    <div class="card-icon">
                      <span class="badge bg-label-success rounded p-2">
                        <i class='bx bx-dollar bx-sm'></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection
