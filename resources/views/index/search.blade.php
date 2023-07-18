@extends('layout.mainlayout')

@section('content')
    <section>
        <div class="container items-wrapper">
            <div class="row justify-content-center">
                <div class="col-9 col-md-9 col-12">
                    @if($games->count() > 0)
                    <h4 class="text-white heading-title max-content mb-90">{{ isset($_GET['q']) == NULL ? 'All Items' : $games->count().' Hasil Pencarian' }}</h4>
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
                    @else

                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="text-white fs-2">Ups... Hasil Dari <span class="fw-bolder">{{$_GET['q']}}</span> Tidak Ditemukan</p>
                        </div>
                    </div>

                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
