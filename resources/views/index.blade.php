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
                    <h4 class="text-white heading-title max-content mb-90">Populer Games</h4>
                    <div class="row justify-content-lg-start justify-content-center">
                        @foreach ($games as $data)
                        <div class="col-lg-2 col-md-3 col-5 mt-3 mb-5 mx-0 px-1 g-5">
                            <a href="/order/{{$data->slug}}" class="text-decoration-none w-100 h-100">
                                <div class="card bg-dark shadow h-100 rounded">
                                    <img src="{{ asset('storage/photo/'.$data->thumbnail) }}" width="130" class="rounded-img-buy size-img-buy position-absolute top-4 start-50 translate-middle" alt="game-image">
                                    <div class="card-body text-center mt-5 p-1 pt-lg-3 pt-4">
                                        <h1 class="fs-sm text-white  mt-2">{{ $data->name }}</h1>
                                        <p class="fs-s-sm text-primary">{{ $data->developer }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
