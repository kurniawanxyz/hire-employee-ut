<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2024 02:43:17 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Login - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/logokecil.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/material.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <a href="/" class="btn btn-primary apply-btn"  style="background-color: #ffc107;border: none">Back</a>
            <div class="container">

                <div class="account-logo">
                    <a href="admin-dashboard.html"><img src="{{ asset('assets/admin/img/logo.png') }}"
                            alt="Dreamguy's Technologies"></a>
                </div>

                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Login</h3>
                        <p class="account-subtitle">Access to our dashboard</p>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-block mb-4">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                    placeholder="Enter your email address" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block mb-4">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <label class="col-form-label">Password</label>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        id="password" name="password" placeholder="Enter your password">
                                    <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-block mb-4 text-center">
                                <button class="btn btn-warning w-100" type="submit">Login</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/admin/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/app.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2024 02:43:27 GMT -->

</html>
