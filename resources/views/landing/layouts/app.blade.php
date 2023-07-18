<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#2d3238">
    <meta name="title" content="HAYUTOPUP - Top Up Termurah Instant Buka 24 Jam">
    <meta name="description"
        content="HAYUTOPUP - Top Up Instant Game &amp; Voucher termurah, terpercaya, dan aman legal 100% open 24 Jam">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.html">
    <meta property="og:title" content="HAYUTOPUP - Top Up Termurah Instant Buka 24 Jam">
    <meta property="og:description"
        content="HAYUTOPUP - Top Up Instant Game &amp; Voucher termurah, terpercaya, dan aman legal 100% open 24 Jam">
    <meta property="og:image" content="favicon.ico">
    <meta name="robots" content="index, follow">
    <meta content="desktop" name="device">
    <meta name="author" content="HAYUTOPUP">
    <meta name="coverage" content="Worldwide">
    <meta name="apple-mobile-web-app-title" content="HAYUTOPUP - Top Up Termurah Instant Buka 24 Jam">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="csrf-token" content="Jaq301pgQYKi2nK4A9lPPzEsAszjKjRxARNh4Wkj">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('assets/scss/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylecard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/chatbox.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <script src="https://use.fontawesome.com/6da2e1892f.js"></script>
    <script src="https://kit.fontawesome.com/99f8e55a96.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <style>
        .card-header2 {
            height: 70px;
            /* padding: 0.5rem 1rem; */
            /* margin-bottom: 0; */
            /* background-color: #282c30; */
            /* border-bottom: 1px solid rgba(0, 0, 0, 0.125); */
        }

    </style>

</head>

<body class="d-flex2 flex-column min-vh-100  text-white">

    <div class="sidebar">
        <div class="d-flex">
            <a class="navbar-brand d-none d-lg-inline-block" href="{{ route('landing.index') }}">
                <img src="{{ asset('assets/images/logo-snowflakes.png') }}" alt="LOGO" class="logo-atas">
            </a>
            <a class="navbar-brand mx-auto d-lg-none d-inline-block" href="{{ route('landing.index') }}">
                <img src="{{ asset('assets/images/logo-snowflakes.png') }}" alt="LOGO" class="logo-atas">
            </a>
        </div>
        <div class="container">
            <ul class="navbar-nav ms-auto nav-stacked">
                <li class="nav-item">
                    <a href="{{ route('landing.index') }}" class="nav-link text-white ">
                        <i class="fa fa-home"></i> Beranda</a>
                </li>
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a href="/" class="nav-link text-white ">
                        <i class="fa fa-info-circle"></i> About</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link text-white ">
                        <i class="fa fa-phone"></i> Contact</a>
                </li>
                <div class="d-flex my-2">
                    <a class="btn btn-primary but-side" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"
                            aria-hidden="true"></i>
                        Login</a>
                </div>
                @endif
                @else
                <li class="nav-item">
                    <a href="{{ route('landing.history-order') }}" class="nav-link text-white ">
                        <i class="fas fa-shopping-cart"></i> Riwayat Pesanan</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle" id="navUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        <span id="header_username">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark shadow mb-2" aria-labelledby="navUser">
                        @if (auth()->user()->role == "Admin")
                        <li><a class="dropdown-item text-white" href="{{ route('home') }}" id="header_saldo"><i
                            class="fas fa-user-secret"></i> Admin Menu</a></li>
                        @endif

                        @if (auth()->user()->role == "User")
                        <li><a class="dropdown-item text-white" href="{{ route('landing.profil') }}"><i class="fas fa-user"></i> Profil</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('landing.changePassword') }}"><i class="fas fa-cog"></i> Ganti Password</a></li>
                        <li>
                            @endif
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-white" href="{{ route('logout') }}"><i
                                        class="fas fa-sign-out-alt"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
    <div class="content">
        <header class="mb-5">
            <nav class="navbar navbar-expand-lg fixed-top text-white bg-dark navbar-dark shadow d-block d-sm-none">
                <div class="container">
                    <div class="d-flex">
                        <span class="w-100 d-lg-none d-block">
                        </span>
                        <a class="navbar-brand d-none d-lg-inline-block" href="{{ route('landing.index') }}">
                            <img src="{{ asset('assets/images/logo-snowflakes.png') }}" alt="LOGO" class="logo-atas">
                        </a>
                        <a class="navbar-brand mx-auto d-lg-none d-inline-block" href="{{ route('landing.index') }}">
                            <img src="{{ asset('assets/images/logo-snowflakes.png') }}" alt="LOGO" class="logo-atas">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-right" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ms-auto nav-stacked">
                            <li class="nav-item">
                                <a href="{{ route('landing.index') }}" class="nav-link text-white ">
                                    <i class="fa fa-home"></i>
                                    Home</a>
                            </li>
                        </ul>
                        @guest
                @if (Route::has('login'))
                <ul class="navbar-nav ms-auto nav-stacked">
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white ">
                            <i class="fa fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link text-white ">
                            <i class="fa fa-phone"></i> Contact</a>
                    </li>
                </ul>
                <div class="d-flex my-2">
                    <a class="btn btn-primary but-side" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"
                            aria-hidden="true"></i>
                        Login</a>
                </div>
                @endif
                @else
                <ul class="navbar-nav ms-auto nav-stacked">
                    <li class="nav-item">
                        <a href="{{ route('landing.history-order') }}" class="nav-link text-white ">
                            <i class="fas fa-shopping-cart"></i>
                            Riwayat Transaksi</a>
                    </li>
                </ul>

                <div class="d-flex my-2">
                    <a class="btn btn-primary but-side" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="fas fa-sign-out-alt" aria-hidden="true"></i>
                        Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer class="footer mt-auto">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('assets/images/favicon.png') }}" alt="LOGO" class="logo-bawah">
                            </div>
                            <div class="col-10">
                                <h5 class="text-uppercase mt-2" style="margin:0">SNOWFLAKES GAME STORE</h5>
                                <div class="mt-2">
                                    <span>Layanan Topup Game dan Voucher termurah, terpercaya, dan aman legal 100%.</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mt-2">
                            <table>
                                <tr>
                                    <td><i class="fa-brands fa-whatsapp"></i> WhatsApp</td>
                                    <td valign="top">: </td>
                                    <td style="padding-left:5px"><a href="#" target="_blank"
                                            class="text-white">123456789</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa-brands fa-instagram"></i> Instagram</td>
                                    <td valign="top">: </td>
                                    <td style="padding-left:5px"><a href="#" class="text-white"
                                            target="_blank">snowflakesstore</a></td>
                                </tr>
                                <tr>
                                    <td><i class="fa-solid fa-envelope"></i> E-mail</td>
                                    <td valign="top">: </td>
                                    <td style="padding-left:5px"><a href="#" class="text-white"><span
                                                class="__cf_email__"
                                                data-cfemail="e0939590908f9294a088819995948f909590ce838f8d">snowflakes@gmail.com</span></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="mt-2">Peta Situs</h5>
                        <div class="mt-2">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="/" class="nav-link text-white active">
                                        <i class="fas fa-angle-right text-primary"></i>
                                        Beranda
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="mt-2">Pembayaran</h5>
                        <div class="mt-3">
                            <img src="{{ asset('assets/images/bca.png') }}" class="hayutopup-pgimg">
                            <img src="{{ asset('assets/images/Dana.png') }}" class="hayutopup-pgimg">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-2">
                <div class="row" id="footer-credit">
                    <div class="col">
                        <div class="container mt-2 mb-2 text-center">
                            <small>
                                Copyright &copy; 2023 <a href="#" class="text-white">Snowflakes Game Store</a>
                                All Rights Reserved.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @include('sweetalert::alert')
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/disable-popup.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/modal-information.js') }}" type="text/javascript"></script>

</html>
