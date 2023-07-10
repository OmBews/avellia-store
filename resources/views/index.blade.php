@extends('layout.mainlayout')

@section('content')
    <section id="content-hero-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0 mx-auto">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/16782032712384f4be-cc47-4f81-a08b-3e6cadb797d9.jpg" alt="">
                            </div>
                            {{-- <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/16782032712384f4be-cc47-4f81-a08b-3e6cadb797d9.jpg" alt="">
                            </div> --}}
                            {{-- <div class="swiper-slide">
                                <img src="https://takapedia.com/assets/img/1685711818new%20banner%20taka.png" alt="">
                            </div> --}}
                            <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/1686170081ezgif.com-resize%20(4)%20(1).jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next d-lg-flex d-none"></div>
                        <div class="swiper-button-prev d-lg-flex d-none"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 col-md-9 col-12">
                    <h4 class="text-white" style="margin-bottom: 80px">Games</h4>
                    <div class="row">
                        <div class="col-2 mt-3 mb-5 mx-0 px-1">
                            <div class="card bg-dark shadow h-100 rounded" style="max-width: 100%;cursor:pointer;"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; window.location='https://takapedia.com/order/top-up-diamond-proses-otomatis'"
                                data-cf-modified-acd7c5486872415cda61912a-="">
                                <img src="https://takapedia.com/assets/img/1673904320diamond fast (3).png"
                                    class="card-img-top rounded-img-buy size-img-buy position-absolute top-4 start-50 translate-middle"
                                    alt="top-up-diamond-proses-otomatis-icon">
                                <div class="card-body text-center mt-5 mb-0 p-1 pt-lg-3">
                                    <small class="col-hp">Top Up Diamond</small><br>
                                    <small class="col-hp2 text-muted text-yellow">Proses Otomatis</small>
                                </div>
                                <div class="col justify-content-center my-auto d-none">
                                    <a href="https://takapedia.com/order/top-up-diamond-proses-otomatis"
                                        class="btn btn-topup float-end rounded-pill m-2 btn-sm">
                                        Top Up
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-3 mb-5 mx-0 px-1">
                            <div class="card bg-dark shadow h-100 rounded" style="max-width: 100%;cursor:pointer;"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; window.location='https://takapedia.com/order/top-up-diamond-proses-otomatis'"
                                data-cf-modified-acd7c5486872415cda61912a-="">
                                <img src="https://takapedia.com/assets/img/1673904320diamond fast (3).png"
                                    class="card-img-top rounded-img-buy size-img-buy position-absolute top-4 start-50 translate-middle"
                                    alt="top-up-diamond-proses-otomatis-icon">
                                <div class="card-body text-center mt-5 mb-0 p-1 pt-lg-3">
                                    <small class="col-hp">Top Up Diamond</small><br>
                                    <small class="col-hp2 text-muted text-yellow">Proses Otomatis</small>
                                </div>
                                <div class="col justify-content-center my-auto d-none">
                                    <a href="https://takapedia.com/order/top-up-diamond-proses-otomatis"
                                        class="btn btn-topup float-end rounded-pill m-2 btn-sm">
                                        Top Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
