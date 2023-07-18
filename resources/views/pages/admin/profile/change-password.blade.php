@extends('layouts.app')

@section('title')
    <title>Snowflakes - Change Password</title>
@endsection

@section('breadcumbs')
    <a href="{{ route('home') }}">Dashboard</a>&nbsp;/ Change Password
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
                        <h5 class="card-title fw-semibold">Change Password</h5>
                        <p class="card-subtitle mb-4">Untuk mengamankan password anda, silahkan ganti password pada form berikut</p>
                        <form action="{{ route('profile.changePassword.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <div class="note-title">
                                        <label class="mb-2">Password Lama</label>
                                        <input type="password" class="form-control" name="old_password" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="note-title">
                                        <label class="mb-2">Password Baru</label>
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="note-title">
                                        <label class="mb-2">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" name="password_confirmation" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
