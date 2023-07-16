@extends('layouts.app')

@section('title')
<title>Snowflakes - Game</title>
@endsection

@section('breadcumbs')
<a href="{{ route('home') }}">Dashboard</a>&nbsp;/ Game
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
                        <h5 class="card-title fw-semibold">List Game</h5>
                        <p class="card-subtitle mb-3">Tambahkan Game dan Perbanyak Kategori Penjualan</p>

                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                            data-bs-target="#tambahgame">
                            Tambah Game
                        </button>

                        <div class="modal fade" id="tambahgame" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Game</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.game.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Nama Game</label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Masukan Nama Game" autofocus required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea name="description" class="form-control"
                                                        placeholder="Masukan Deskripsi" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label class="form-label">Gambar</label>
                                                    <input type="file" name="image" class="form-control" accept="image/jpg,image/jpeg,image/png" required>
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
                                    <th class="text-center">Nama Game</th>
                                    <th class="text-center">Slug</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center" style="width: 80px;"><span class="tf-icons bx bx-cog"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $game)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $game->name }}</td>
                                    <td class="text-center">{{ $game->slug }}</td>
                                    <td class="text-center">@if (old('image', $game->image))
                                        <img src="{{ asset('storage/'. old('image', $game->image)) }}" width="50px"
                                            class="rounded-circle m-3">
                                        @else
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                            width="50px" class="rounded-circle m-3">
                                        @endif</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#ModalEdit{{ $game->id }}">
                                            <span class="tf-icons bx bx-pencil"></span>
                                          </a>
                                        <a href="" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete{{ $game->id }}">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                @include('pages.admin.game.edit')
                                @include('pages.admin.game.delete')
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
