@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Ganti Profil</title>
@endsection

@section('content')
<div class="wrapper pt-4">
    <br>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card bg-dark shadow-lg cards" style="background-color: #15202c!important">
                    <div class="card-header">
                        <h3 class="card-title text-center">Ganti Profil</h3>
                    </div>
                    <form action="{{ route('landing.update') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                    <input required type="text" class="form-control" value="{{ old('name', auth()->user()->name) }}" id="name" name="name" autocomplete="off">
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    <input required type="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" id="email"
                                        name="email" autocomplete="off">
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
