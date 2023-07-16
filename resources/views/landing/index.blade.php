@extends('landing.layouts.app')

@section('title')
<title>SNOWFLAKES - Top Up Termurah</title>
@endsection

@section('content')
<div class="wrapper">
    <div class="header-content pt-4">
        <h2 class="text-white">Selamat Datang di Snowflakes Game Store</h2>
    </div>
    <br>
    <div class="row d-lg-none d-inline-block m-0 w-100">
        <div class="col-lg-12 p-0">
            <div class="carousel slide shadow" id="carousels_promo" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                            <img src="https://news.codashop.com/bd/wp-content/uploads/sites/10/2020/10/Halloween-Image-Banner-Mobile-Legends.jpg"
                                alt="" class="d-block w-100 rounded-4">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousels_promo"
                    data-bs-slide="prev">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousels_promo"
                    data-bs-slide="next">
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-none d-lg-block">
            <div class="col-lg-12">
                <div class="carousel slide shadow" id="carousels_promo-d" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <img src="https://news.codashop.com/bd/wp-content/uploads/sites/10/2020/10/Halloween-Image-Banner-Mobile-Legends.jpg"
                                    alt="" class="d-block w-100 rounded-4">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousels_promo-d"
                        data-bs-slide="prev">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousels_promo-d"
                        data-bs-slide="next">
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class=" carousel slide " data-bs-ride="false" id="carouselCard-Top Up">
                            <div class="carousel-inner">
                                <div class="carousel-item  active ">
                                    <div class="row g-2 justify-content-left ">

                                        @foreach ($games as $game)
                                        <div class="col-3 col-xs-6">
                                            <div class="card rounded-4 p-2 card-products prodcs">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="{{ asset('storage/'. old('image', $game->image)) }}"
                                                            class="card-img-top rounded-img-buy size-img-buy"
                                                            alt="{{ $game->name }}">
                                                    </div>
                                                    <div class="col-xs-12 col-8">
                                                        <div class="d-block d-sm-none">
                                                            <a href="https://hayutopup.com/game/mobile-legend-b"
                                                                class="text-decoration-none text-white">
                                                                <div class="name-product">
                                                                    <div class="hayutopup-hp3">
                                                                        <small class="text-sm text-center"><b
                                                                                class="text-center">{{ $game->name }}</b></small><br>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="d-none d-sm-block">
                                                            <div class="name-product">
                                                                <div class="hayutopup-hp3">
                                                                    <small
                                                                        class="text-sm"><b>{{ $game->name }}</b></small><br>
                                                                </div>
                                                                <small class="text-muted d-block">Proses
                                                                    Otomatis</small>
                                                            </div>
                                                            @guest
                                                            @if (Route::has('login'))
                                                            <a href="{{ route('login') }}"
                                                                class="btn btn-primary mt-4 float-end mx-3">
                                                                <i class="fa-solid fa-sign-in-alt"></i> Masuk
                                                            </a>
                                                            @endif
                                                            @else
                                                            <a href="{{ route('landing.detail', ['slug' => $game->slug]) }}"
                                                                class="btn btn-primary mt-4 float-end mx-3">
                                                                <i class="fa-solid fa-bolt"></i> Top Up
                                                            </a>
                                                            @endguest

                                                        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
