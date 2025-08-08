@extends('layout.template')
@section('content')
     <aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('template/images/icon/logo-white.png') }}" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="{{ asset('template/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
                </div>
                <h4 class="name">john doe</h4>
                <a href="#">Sign out</a>
            </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li >
                        <a class="js-arrow" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow"  href="#">
                            <i class="fas fa-chart-bar"></i>User</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-basket"></i>eCommerce</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-trophy"></i>Features
                            <span class="arrow">
                            </span>
                        </a>

                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages
                        </a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
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
