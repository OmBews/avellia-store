@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" mt-5">
                <a href="/app/games" class="btn btn-primary border-0 rounded-1 fs-sm"><i class="bi bi-chevron-left"></i> Back </a>
            </div>
            <div class="col-12 mt-2">
                <div class="card my-3 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2 text-white">
                        <div class="row">
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Thumbnail :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p><img src="{{asset('storage/photo/'.$game->thumbnail)}}" width="120" alt=""></p>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Name :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="fs-sm">{{ $game->name }}</p>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Detail Name :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="fs-sm">{{ $game->detail_name }}</p>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Developer :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="fs-sm">{{ $game->developer }}</p>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Short Description :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="fs-sm">{{ $game->short_description }}</p>
                            </div>
                            <hr>
                            <div class="col-lg-6 col-12">
                                <p class="fw-bolder">Tutorial :</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p class="fs-sm">{!! nl2br($game->tutorial) !!}</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
