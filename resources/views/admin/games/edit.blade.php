@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" mt-5">
                <a href="/app/games" class="btn btn-primary border-0 rounded-1 fs-sm"><i class="bi bi-chevron-left"></i> Back </a>
            </div>
            <div class="col-lg-6 col-md-8 col-12 mt-2">
                <div class="card my-3 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2">
                        <form action="/app/games/{{$game->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Thumbnail</label>
                                <div class="text-center mb-3">
                                    <img src="{{asset('storage/photo/'.$game->thumbnail)}}" alt="" width="120">
                                </div>
                                <input autocomplete="off" type="file" name="photo" value="{{old('photo')}}" class="form-control dark @error('photo') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('photo')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Name</label>
                                <input autocomplete="off" type="text" name="name" required value="{{ $game->name }}" class="form-control dark @error('name') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('name')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Detail Name</label>
                                <input autocomplete="off" type="text" name="detail_name" required value="{{ $game->detail_name }}" class="form-control dark @error('detail_name') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('detail_name')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Developer</label>
                                <input autocomplete="off" type="text" name="developer" required value="{{ $game->developer }}" class="form-control dark @error('developer') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('developer')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Short Description</label>
                                <input autocomplete="off" type="text" name="short_description" required value="{{ $game->short_description }}" class="form-control dark @error('short_description') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('short_description')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Tutorial</label>
                                <textarea name="tutorial" id="" cols="30" rows="10" required class="form-control dark @error('tutorial') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">{{ $game->tutorial }}</textarea>
                                @error('tutorial')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror

                            </div>
                            <div class="mt-4 mb-3 text-center">
                                <button class="btn btn-primary rounded-1 w-100 mb-3 border-0 fs-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
