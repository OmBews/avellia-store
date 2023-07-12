@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
                <h1 class="text-white mt-2">Nominal Room's</h1>
                <div class="text-end">
                    <a href="/app/nominals/create" class="btn btn-primary border-0 rounded-1 fs-sm ">Add <i class="bi bi-plus"></i></a>
                </div>
                <div class="card mt-3 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Thumbnail</th>
                                        <th>Game</th>
                                        <th>Nama</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nominals as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage/photo/'.$data->thumbnail) }}" width="30" alt=""></td>
                                        <td>{{ $data->game->name }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>Rp. {{ number_format($data->price) }}</td>
                                        <td class="d-flex ">
                                            <form action="/app/nominals/{{ $data->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm text-gray bg-transparent border-0 " onclick="return confirm('Apakah Anda Ingin Menghapus {{ $data->name }} ?')"><i class="bi bi-trash3"></i></button>
                                            </form>
                                            <a href="/app/nominals/{{ $data->id }}/edit" class="btn btn-danger btn-sm text-gray bg-transparent border-0"><i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
