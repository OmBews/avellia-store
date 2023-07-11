@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" mt-5">
                <a href="/app/admin" class="btn btn-primary border-0 rounded-1 fs-sm"><i class="bi bi-chevron-left"></i> Back </a>
            </div>
            <div class="col-lg-6 col-md-8 col-12 mt-2">
                <div class="card my-3 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2">
                        <form action="/app/admin/{{$user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Name</label>
                                <input autocomplete="off" type="text" name="name" required value="{{ $user->name }}" class="form-control dark @error('name') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('name')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Email</label>
                                <input autocomplete="off" type="text" name="email" required value="{{ $user->email }}" class="form-control dark @error('email') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('email')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Username</label>
                                <input autocomplete="off" type="text" name="username" required value="{{ $user->username }}" class="form-control dark @error('username') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('username')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
                            </div>
                            <div class="mt-3">
                                <label class="mb-1 opacity-75 fs-sm text-white">Password</label>
                                <input autocomplete="off" type="text" name="password" value="" class="form-control dark @error('password') is-invalid @enderror bg-soft-dark border-0 text-white fs-sm rounded-1">
                                @error('password')<p class="text-danger fs-sm mb-0">{{$message}}</p>@enderror
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
