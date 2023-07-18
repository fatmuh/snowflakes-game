@extends('layouts.app')

@section('title')
<title>Snowflakes - Transaksi</title>
@endsection

@section('breadcumbs')
<a href="{{ route('home') }}">Dashboard</a>&nbsp;/ Transaksi
@endsection

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">List Transaksi</h5>
                        <p class="card-subtitle mb-3">Lihat Data Penjualan Transaksi</p>

                        <table class="table datatab">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 100px;">No Invoice</th>
                                    <th class="text-center">Pembeli</th>
                                    <th class="text-center">Layanan</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center" style="width: 120px;"><span
                                            class="tf-icons bx bx-cog"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $pesanan)
                                <tr>
                                    <th scope="row" class="text-center">#{{ $pesanan->id }}</th>
                                    <td class="text-center">{{ $pesanan->user->name }}</td>
                                    <td class="text-center">{{ $pesanan->product->name }}</td>
                                    <td class="text-center">{{ "Rp".number_format($pesanan->price,2,',','.') }}</td>
                                    <td class="text-center">
                                        @if ($pesanan->status == 'SELESAI')
                                            <span class="badge bg-success text-white">SELESAI</span>
                                        @elseif ($pesanan->status == 'PROSES')
                                            <span class="badge bg-primary text-white">PROSES</span>
                                        @elseif ($pesanan->status == 'PENDING')
                                            <span class="badge bg-warning text-white">PENDING</span>
                                        @else
                                            <span class="badge bg-danger text-white">DIBATALKAN</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-icon btn-info" data-bs-toggle="modal"
                                            data-bs-target="#ModalShow{{ $pesanan->id }}">
                                            <span class="tf-icons bx bx-show"></span>
                                        </a>
                                        <a href="" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ModalEdit{{ $pesanan->id }}">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </a>
                                        <a href="" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete{{ $pesanan->id }}">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                @include('pages.admin.transaction.show')
                                @include('pages.admin.transaction.edit')
                                @include('pages.admin.transaction.delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    @endsection

    @section('script')
    <script>
        $(document).ready(function () {
            $('.datatab').DataTable();
        });
    </script>
    @endsection
