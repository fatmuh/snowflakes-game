@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Ganti Kata Sandi</title>
@endsection

@section('content')
<div class="wrapper pt-4">
    <br>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card bg-dark shadow-lg cards" style="background-color: #15202c!important">
                    <div class="card-header">
                        <h3 class="card-title text-center">Ganti Kata Sandi</h3>
                    </div>
                    <form action="{{ route('landing.changePassword.post') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-heart"></i></span>
                                    <input required type="password" class="form-control" placeholder="Masukan Kata Sandi Lama" id="old_password" name="old_password" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-heart"></i></span>
                                    <input required type="password" class="form-control" placeholder="Masukan Kata Sandi Baru" id="password" name="password" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-heart"></i></span>
                                    <input required type="password" class="form-control" placeholder="Masukan Konfirmasi Kata Sandi" id="password_confirmation" name="password_confirmation" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-end mb-3">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-sign-in-alt"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
