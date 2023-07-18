@extends('layouts.app')

@section('title')
<title>Snowflakes - User</title>
@endsection

@section('breadcumbs')
<a href="{{ route('home') }}">Dashboard</a>&nbsp;/ User
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
                        <h5 class="card-title fw-semibold">List User</h5>
                        <p class="card-subtitle mb-3">Lihat data user yang terdaftar</p>

                        <table class="table datatab">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20px;">#</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center" style="width: 120px;"><span
                                            class="tf-icons bx bx-cog"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $user)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->role }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-icon btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#ModalEdit{{ $user->id }}">
                                            <span class="tf-icons bx bx-pencil"></span>
                                        </a>
                                        <a href="" class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#ModalDelete{{ $user->id }}">
                                            <span class="tf-icons bx bx-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                @include('pages.admin.user.edit')
                                @include('pages.admin.user.delete')
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
