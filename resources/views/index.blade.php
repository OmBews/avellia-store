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
                            <div class="swiper-slide">
                                <img src="https://lumosdiamond.com/assets/img/168874655591DD65FA-CD34-4CE6-9FEA-F5E322A2392C.jpeg" alt="">
                            </div>
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
                    <h4 class="text-white heading-title max-content" style="margin-bottom: 80px">Populer Games</h4>
                    <div class="row">
                        @foreach ($games as $data)
                        <div class="col-lg-2 col-md-3 col-6 mt-3 mb-5 mx-0 px-1 g-5">
                            <div class="card bg-dark shadow h-100 rounded" style="max-width: 100%; cursor:pointer;"  onclick=" window.location.href='/order/{{$data->slug}}'"
                                data-cf-modified-acd7c5486872415cda61912a-="">
                                <img src="{{ asset('storage/photo/'.$data->thumbnail) }}" class="card-img-top rounded-img-buy size-img-buy position-absolute top-4 start-50 translate-middle" alt="top-up-diamond-proses-otomatis-icon">
                                <div class="card-body text-center mt-5 mb-0 p-1 pt-lg-3">
                                    <h1 class="fs-sm text-white  mt-2">{{ $data->name }}</h1>
                                    <p class="fs-s-sm text-primary">{{ $data->developer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
