<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avellia Store - Top-Up Mobile Legends, Free Fire, PUBGM, Valorant, Genshin Impact, Wild Rift, Tower of Fantasy, dan Banyak Game Lainnya | Termurah Dibanding Toko Lain | Lumos Diamond</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    {{-- swiper js  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- izitoast  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
    <nav class="navbar bg-dark py-3 shadow navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand d-lg-block d-none" href="/{{Auth::user() ? 'app' : ''}}"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    
                    @if(Auth::user())
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/app">Dashboard</a>
                        </li>
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/app/admin">Admin</a>
                        </li>
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/app/games">Games</a>
                        </li>
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/app/nominals">Nominals</a>
                        </li>
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/app/transactions">Transactions</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none color-dark-primary" href="/logout"><i class="bi bi-box-arrow-in-right"></i></a>
                        </li>
                    </ul>
                    @endif
                </div>
            </div>
            <a class="navbar-brand d-lg-none d-block me-auto ps-3" href="/{{Auth::user() ? 'app' : ''}}"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></a>
        </div>
    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
