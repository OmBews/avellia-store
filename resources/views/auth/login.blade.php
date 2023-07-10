@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 mt-5">
                <div class="card mt-5 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2">
                        <div class="text-center">
                            <h1 class="text-white">Avellia <span class="text-primary">Store</span></h1>
                        </div>
                        <form action="/login/store" method="get">
                            @csrf
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Username</label>
                                <input autocomplete="off" type="text" name="username" required value="{{old('username')}}" class="form-control auth bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('username')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Password</label>
                                <input autocomplete="off" type="password" name="password" required class="form-control auth bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('password')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-5 mb-3 text-center">
                                <button class="btn btn-primary rounded-1 w-100 mb-3 border-0">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
