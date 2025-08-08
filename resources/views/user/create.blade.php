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
                    <li>
                        <a class="js-arrow" href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard
                        </a>
                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
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
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                    <div class="row mb-3">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Name Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="name" name="name" placeholder="Text" class="form-control"
                                required>
                            <small class="form-text text-muted">Masukan Nama</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email Input</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" id="email" name="email" placeholder="Enter Email"
                                class="form-control" required>
                            <small class="form-text text-muted">Masukan Email</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">Input Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="form-control" required>
                            <small class="form-text text-muted">Masukan password</small>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <a href="{{ route('user.index') }}" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
