@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Riwayat Pesanan</title>
@endsection

@section('content')
<div class="wrapper pt-4">
    <div class="container mb-5">
        <div class="row mt-1">
            <div class="col-12">
                <div class="alert alert-primary">
                    <marquee style="color:#4C4993 !important;" class="fw-bold">
                        <i class="fas fa-angle-double-right"></i>
                        Berikut adalah riwayat transaksi anda
                        <i class="fas fa-angle-double-left"></i>

                    </marquee>
                </div>
                <div class="card mt-1 bg-dark shadow-lg mt-1 text-light">
                    <div class="card-body">
                        <h4 class="page-title text-light">Riwayat Pesanan</h4>
                        <div class="table-responsive">
                            <table class="table m-o table-bordered text-light">
                                <thead>
                                    <tr>
                                        <th>No. Invoice</th>
                                        <th>Layanan</th>
                                        <th>Target</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $payment)
                                        <td>#{{ $payment->id }}</td>
                                        <td>{{ $payment->product->name }}</td>
                                        <td>{{ $payment->user_game }}</td>
                                        <td>{{ "Rp".number_format($payment->price,2,',','.') }}</td>
                                        <td>{{ $payment->status }}</td>
                                        <td class="text-center"><a href="" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ModalDetail{{ $payment->id }}">
                                            <i class="fas fa-eye"></i>
                                        </a></td>
                                    @include('landing.detailOrder')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
