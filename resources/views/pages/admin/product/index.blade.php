@extends('layouts.app')

@section('title')
<title>Snowflakes - Produk</title>
@endsection

@section('breadcumbs')
<a href="{{ route('home') }}">Dashboard</a>&nbsp;/ Produk
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
                        <h5 class="card-title fw-semibold">List Produk</h5>
                        <p class="card-subtitle mb-3">Tambahkan dan Perbanyak Produk Penjualan</p>

                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                            data-bs-target="#tambahgame">
                            Tambah Produk
                        </button>

                        <div class="modal fade" id="tambahgame" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Game</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.produk.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Game</label>
                                                    <select class="select2-game form-select form-select-lg" data-allow-clear="true" name="game_id">
                                                        @foreach ($games as $game)
                                                            <option value="{{ $game->id }}">{{ $game->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label class="form-label">Nama Produk</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama Produk" required>
                                                </div>
                                                <div class="col mb-0">
                                                    <label class="form-label">Harga</label>
                                                    <input type="number" name="price" class="form-control" placeholder="Masukan Harga Produk" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-label-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <table class="table datatab">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20px;">#</th>
                                    <th class="text-center">Game</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center" style="width: 80px;"><span
                                            class="tf-icons bx bx-cog"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $produk)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $produk->game->name }}</td>
                                    <td class="text-center">{{ $produk->name }}</td>
                                    <td class="text-center">{{ "Rp".number_format($produk->price,2,',','.') }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ModalEdit{{ $produk->id }}">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </a>
                                        <a href="" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete{{ $produk->id }}">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                @include('pages.admin.product.edit')
                                @include('pages.admin.product.delete')
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

        "use strict";
        $(function () {
            var e = $(".selectpicker"),
                t = $(".select2-game"),
                i = $(".select2-icons");

            function l(e) {
                return e.id ? "<i class='bx bxl-" + $(e.element).data("icon") + " me-2'></i>" + e.text : e.text
            }
            e.length && e.selectpicker(), t.length && t.each(function () {
                var e = $(this);
                e.wrap('<div class="position-relative"></div>').select2({
                    placeholder: "Pilih Game",
                    dropdownParent: e.parent()
                })
            }), i.length && i.wrap('<div class="position-relative"></div>').select2({
                templateResult: l,
                templateSelection: l,
                escapeMarkup: function (e) {
                    return e
                }
            })
        });

    </script>
    @endsection
