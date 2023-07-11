@extends('layout.authlayout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
                <h1 class="text-white mt-2">Admin Room's</h1>
                <div class="text-end">
                    <a href="/app/admin/create" class="btn btn-primary border-0 rounded-1 fs-sm ">Add <i class="bi bi-plus"></i></a>
                </div>
                <div class="card mt-3 bg-dark rounded-1 border-0 shadow">
                    <div class="card-body mx-2">
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->username }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td class="d-flex ">
                                            <form action="/app/admin/{{ $data->id }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm text-gray bg-transparent border-0 " onclick="return confirm('Apakah Anda Ingin Menghapus {{ $data->name }} ?')"><i class="bi bi-trash3"></i></button>
                                            </form>
                                            <a href="/app/admin/{{ $data->id }}/edit" class="btn btn-danger btn-sm text-gray bg-transparent border-0"><i class="bi bi-pencil-square"></i></a>
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
