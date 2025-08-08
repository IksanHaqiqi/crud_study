<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <!-- Font dan Icons -->
    <link href="{{ asset('template/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('template/vendor/fontawesome-6.7.2/css/all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('template/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('template/vendor/bootstrap-5.3.7.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS -->
    <link href="{{ asset('template/css/aos.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('template/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('template/css/swiper-bundle.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('template/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS -->
    <link href="{{ asset('template/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('template/images/icon/logo.png') }}" alt="CoolAdmin">

                            </a>
                        </div>
                        <div class="login-form m-3">
                            <form action="{{ route('register.proses') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="name"
                                        value="{{ old('name') }}" placeholder="Name" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        value="{{ old('email') }}" placeholder="Email" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Password" required>
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="login-checkbox mt-2">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green mt-2" type="submit">sign
                                    in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    sudah ada akun ?
                                    <a href="{{ route('login') }}">login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <!-- Vanilla Utils -->
    <script src="{{ asset('template/js/vanilla-utils.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('template/vendor/bootstrap-5.3.7.bundle.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('template/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('template/vendor/chartjs/Chart.bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('template/js/bootstrap5-init.js') }}"></script>
    <script src="{{ asset('template/js/main-vanilla.js') }}"></script>
    <script src="{{ asset('template/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/aos.js') }}"></script>
    <script src="{{ asset('template/js/modern-plugins.js') }}"></script>


</body>

</html>
<!-- end document-->
