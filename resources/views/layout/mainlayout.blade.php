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
            <a class="navbar-brand d-lg-block d-none p-semi" href="/"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h4 class="offcanvas-title p-semi" id="offcanvasNavbarLabel"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav w-100 mb-lg-0 mb-3">
                        <li class="nav-item w-100 mx-lg-3 mx-0">
                            <form class="d-flex input-group rounded-1 w-100" action="/search" method="get" role="search">
                                <button class="input-group-text bg-transparent border-0 " id="basic-addon2"><i class="bi bi-search text-white"></i></button>
                                <input class="form-control fs-sm border-0 " name="q" autocomplete="off" type="search" placeholder="Cari nama game kamu disini">
                            </form>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/">Home</a>
                        </li>
                        <li class="nav-item my-lg-auto my-1 mx-3">
                            <a class="text-decoration-none fs-sm color-dark-primary" href="/history">History</a>
                        </li>
                        <li class="nav-item dropdown my-lg-auto my-1 mx-3 d-lg-block d-none">
                            <a class="nav-link nav-hover fs-sm" href="/anime" role="button" data-bs-toggle="dropdown"  >
                                <div class="d-flex align-items-center">Lainnya <i class="bi bi-chevron-down fs-s-sm ms-2"></i></div>
                            </a>
                            <ul class="dropdown-menu lg dropdown-menu-end shadow-sm position-absolute rounded-1 py-2">
                                <li><a class="dropdown-item py-3 fs-sm" href="/tournament">
                                    <div class="row align-items-center">
                                        <div class="col-2 text-center">
                                            <i class="bi bi-geo me-2"></i>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="fs-sm mb-0 fw-bold">Tournament</p>
                                            <p class="fs-s-sm mb-0">Buat Daftar Nama Tournament</p>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item py-3 fs-sm" href="/hitung/winrate">
                                    <div class="row align-items-center">
                                        <div class="col-2 text-center">
                                            <i class="bi bi-calculator me-2"></i>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="fs-sm mb-0 fw-bold">Hitung WinRate</p>
                                            <p class="fs-s-sm mb-0">Hitung WR Hero dan Match</p>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item py-3 fs-sm" href="/hitung/magic-wheel">
                                    <div class="row align-items-center">
                                        <div class="col-2 text-center">
                                            <i class="bi bi-star-half me-2"></i>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="fs-sm mb-0 fw-bold">Hitung Magic Wheel</p>
                                            <p class="fs-s-sm mb-0">Hitung Point Magic Wheel</p>
                                        </div>
                                    </div>
                                </a></li>
                                <li><a class="dropdown-item py-3 fs-sm" href="/hitung/zodiac">
                                    <div class="row align-items-center">
                                        <div class="col-2 text-center">
                                            <i class="bi bi-stars me-2"></i>
                                        </div>
                                        <div class="col-8 ">
                                            <p class="fs-sm mb-0 fw-bold">Hitung Zodiac</p>
                                            <p class="fs-s-sm mb-0">Hitung Point Zodiac</p>
                                        </div>
                                    </div>
                                </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-3 my-auto d-lg-none d-block">
                            <a class="nav-link nav-hover fs-sm" href="/anime" role="button" data-bs-toggle="dropdown"  >
                                <div class="d-flex align-items-center">Lainnya <i class="bi bi-chevron-down fs-s-sm ms-2"></i></div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm position-absolute w-100 rounded-1">
                                <li><a class="dropdown-item fs-sm" href="/tournament"><i class="bi bi-geo me-2"></i>Tournament</a></li>
                                <li><a class="dropdown-item fs-sm" href="/hitung/winrate"><i class="bi bi-calculator me-2"></i>Hitung WinRate</a></li>
                                <li><a class="dropdown-item fs-sm" href="/hitung/magic-wheel"><i class="bi bi-star-half me-2"></i>Hitung Magic Wheel</a></li>
                                <li><a class="dropdown-item fs-sm" href="/hitung/zodiac"><i class="bi bi-stars me-2"></i>Hitung Zodiac</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="navbar-brand d-lg-none d-block me-auto ps-3 p-semi" href="/"><img src="https://i.ibb.co/MMkb3JK/IMG-20230702-200346.png" width="190" alt=""></a>
        </div>
    </nav>

    @yield('content')

    {{-- <hr class="my-0">
    <footer>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h5 class="fw-bold">Yasz Avellia</h5>
                    <p class="fs-sm">"Melalui literasi, seseorang dapat memperluas pengetahuan, memperkaya imajinasi, dan mengembangkan kemampuan berpikir kritis."</p>
                </div>
                <hr>
                <div class="col-12 text-center">
                    <a href="" class="h5 mx-3"><i class="bi bi-facebook"></i></a>
                    <a href="" class="h5 mx-3"><i class="bi bi-instagram"></i></a>
                    <a href="" class="h5 mx-3"><i class="bi bi-line"></i></a>
                    <a href="" class="h5 mx-3"><i class="bi bi-youtube"></i></a>
                    <div class="mt-4 text-center">
                        <a href="" class="h6 mx-lg-4 mx-md-2 mx-1">Beranda</a>
                        <a href="" class="h6 mx-lg-4 mx-md-2 mx-1">Category</a>
                        <a href="" class="h6 mx-lg-4 mx-md-2 mx-1">Trending</a>
                        <a href="" class="h6 mx-lg-4 mx-md-2 mx-1">Contact Us</a>
                    </div>
                    <div class="mt-3">
                        <p class="text-dark fs-sm opacity-50">ⓒ LITErasi Entertainment Inc.</p>
                    </div>
                </div>
                <div class="col-lg-1 col-md-2 col-3 text-center pb-2">
                    <img src="{{asset('img/logo.png')}}" width="100%" alt="">
                </div>
            </div>
        </div>
    </footer> --}}

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
