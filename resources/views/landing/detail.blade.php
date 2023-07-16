@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Top Up Termurah</title>
@endsection

@section('content')
<div class="wrapper pt-4">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-2 mb-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-none d-none d-md-none d-lg-block">
                                            <table>
                                                <tr>
                                                    <td style="width: 25%">
                                                        <img src="{{ asset('storage/'. old('image', $games->image)) }}"
                                                            alt class="shadow rounded bg-dark logo-order">
                                                    </td>
                                                    <td class="mt-0 p-2">
                                                        <h4 class="mb-0">{{ $games->name }}</h4>
                                                        <div class="strip-primary"></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d-lg-none d-md-none">
                                            <table>
                                                <tr>
                                                    <td style="width: 20%">
                                                        <img src="{{ asset('storage/'. old('image', $games->image)) }}"
                                                            alt class="shadow rounded bg-dark logo-order2">
                                                    </td>
                                                    <td class="mt-0 p-2">
                                                        <h4 class="mb-0">{{ $games->name }}</h4>
                                                        <div class="strip-primary"></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="d-none d-md-block d-lg-none d-lg-block">
                                            <table>
                                                <tr>
                                                    <td style="width: 10%">
                                                        <img src="{{ asset('storage/'. old('image', $games->image)) }}"
                                                            alt class="shadow rounded bg-dark logo-order3">
                                                    </td>
                                                    <td class="mt-0 p-2">
                                                        <h4 class="mb-0">{{ $games->name }}</h4>
                                                        <div class="strip-primary"></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="card-body p-0 mt-1">
                                            <p>
                                                {!! nl2br($games->description) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3 d-lg-block d-none">
                        <div class="card bg-dark shadow">
                            <div class="card-header">
                                <h5 class="card-title">Top Up Game Lainnya</h5>
                            </div>
                            <div class="card-body">
                                @foreach($randomData as $data)
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="card flex-row flex-wrap bg-dark">
                                            <div>
                                                <a href="{{ route('landing.detail', ['slug' => $data->slug]) }}"
                                                    class="stretched-link">
                                                    <img src="{{ asset('storage/'. old('image', $data->image)) }}"
                                                        class="card-header2 rounded" alt="genshin-impact-icon">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                {{ $data->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-2 mb-2">
                <form action="{{ route('landing.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Masukkan Data</h5>
                                </div>
                                <div class="card-body">
                                    <div id="userData">
                                        <div class="row row-cols row-cols-md">
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label>ID / Username Game</label>
                                                    <input class="form-control"
                                                        placeholder="Masukkan ID / Username Game" type="text"
                                                        name="user_game" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group mb-3">
                                                    <label>Produk</label>
                                                    <select name="product_id" class="form-control" required>
                                                        <option>---Pilih Produk---</option>
                                                        @foreach ($product as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                                            {{ "Rp".number_format($item->price,2,',','.') }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Pilih Metode Pembayaran</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row row-cols row-cols-md">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label>Bank</label><br>
                                                <img src="https://kreasialumindo.com/wp-content/uploads/2019/01/logo-bca.png"
                                                    width="300px" class="mb-3"><br>
                                                <label>Nomor : 08123456789 a.n. Snowflakes Gamestore</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="mb-2">E-Wallet</label><br>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png"
                                                    width="340px" class="mb-4"><br>
                                                <label>Nomor : 08123456789 a.n. Snowflakes Gamestore</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label>Pilih Pembayaran</label>
                                                <select name="payment_type" class="form-control" required>
                                                    <option>---Pilih Produk---</option>
                                                    <option value="BANK">BANK</option>
                                                    <option value="E-Wallet">E-Wallet</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label>Upload Bukti Pembayaran</label>
                                                <input class="form-control" type="file" name="proof_of_payment"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card bg-dark shadow">
                                <div class="card-header">
                                    <h5 class="card-title">Masukkan Contact</h5>
                                </div>
                                <div class="card-body">

                                    <div class="row row-cols row-cols-md">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label>Nama Pelanggan</label>
                                                <input class="form-control" placeholder="Masukkan Nama Anda" type="text"
                                                    name="customer_name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label>Nomor Rekening / Nomor DANA</label>
                                                <input class="form-control"
                                                    placeholder="Masukkan Nomor Rekening / Nomor DANA" type="number"
                                                    name="account_number" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="denom">Nomor ini akan dihubungi jika terjadi kendala</label>
                                        <input class="form-control" placeholder="628xxxxxxxxxx" type="number"
                                            name="phone" id="phone" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="denom">E-mail</label>
                                        <input class="form-control" placeholder="mail@mail.com" type="email"
                                            name="email" id="email" required>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 clearfix">
                            <div class="w-100">
                                <button class="btn btn-primary w-100 btn-lg" type="submit">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Pesan Sekarang
                                </button>
                                <br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
