@extends('layouts.app')

@section('title')
    <title>Snowflakes - Profil</title>
@endsection

@section('breadcumbs')
    <a href="{{ route('home') }}">Dashboard</a>&nbsp;/ Profile
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
                        <h5 class="card-title fw-semibold">Change Profile</h5>
                        <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="note-title">
                                        <label class="mb-2">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', auth()->user()->name) }}" />
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="note-description">
                                        <label class="mb-2">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email', auth()->user()->email) }}" />
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
