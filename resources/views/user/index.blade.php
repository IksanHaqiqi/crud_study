@extends('layout.template')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-9 offset-3">
                        <h2 class="title-1 m-b-25">User</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th class="text-end">email</th>
                                        <th class="text-end">aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <div class="mb-3 text-end">
                                        <a href="{{ route('user.create') }}" class="btn btn-success" >
                                            Tambah Data
                                        </a>
                                    </div>

                                    @foreach ($users as $u)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td class="text-end">{{ $u->email }}</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-primary ">Edit</a>
                                                <a href="#" class="btn btn-danger ">delete</a>
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
