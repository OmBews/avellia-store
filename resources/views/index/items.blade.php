@extends('layout.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mt-10">
                <div class="card bg-dark border-0 rounded-1 shadow ">
                    <div class="card-body text-white mx-2">
                        <div class="text-center mb-2">
                            <img src="{{ asset('storage/photo/'.$game->thumbnail) }}" width="160" alt="">
                        </div>
                        <h2>{{ $game->name }}</h2>
                        <div class="mt-4">
                            <p class="opacity-50 mb-0">{{ $game->developer }}</p>
                            <p class="text-primary">Open 24 Jam</p>
                        </div>
                        <div class="mt-3">
                            <p>{{ $game->short_description }}</p>
                            <p>Cara Top Up {{ $game->name }} :</p>
                            <ul>
                                <li>{!! nl2br($game->tutorial) !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 mt-10">
                <div class="card bg-dark border-0 rounded-1 shadow text-white">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Lengkapi Data</p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <label>User ID</label>
                                    <input type="number" name="" id="" placeholder="Masukan User ID" class="form-control rounded-1">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label>Server ID</label>
                                    <input type="number" name="" id="" placeholder="Masukan Server ID" class="form-control rounded-1">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary border-0 rounded-1 fs-sm">Check</button>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark border-0 rounded-1 shadow text-white mt-4">
                    <div class="card-header">
                        <p class="fs-5 mb-2">Pilih Nominal</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <p class="fs-5">Top Up</p>
                            <div class="col-lg-4 col-md-4 col-6 gy-3">
                                <div class="list-group shadow h-100">
                                    <input type="radio" name="radioValue" id="nominal-{{$game->value}}" value="{{$game->value}}" class="d-none">
                                    <label for="nominal-{{$game->value}}" class="list-group-items h-100">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col nominal-name">40 (127+13) Diamonds</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col nominal-price">Rp 33.900</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-1 m-auto">
                                                <img src="{{asset('storage/photo/9848642699.webp')}}" width="32" alt="">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
