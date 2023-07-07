@extends('layout.mainlayout')

@section('content')
    <section id="content-hero-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0 mx-auto">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/16782032712384f4be-cc47-4f81-a08b-3e6cadb797d9.jpg"
                                    alt="">
                            </div>
                            {{-- <div class="swiper-slide">
                        <img src="https://lumosdiamond.com/assets/img/16782032712384f4be-cc47-4f81-a08b-3e6cadb797d9.jpg" alt="">
                    </div> --}}
                            {{-- <div class="swiper-slide">
                        <img src="https://takapedia.com/assets/img/1685711818new%20banner%20taka.png" alt="">
                    </div> --}}
                            <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/1686170081ezgif.com-resize%20(4)%20(1).jpg"
                                    alt="">
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
                    <h4 class="text-white">Games</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
