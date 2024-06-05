<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2024 02:49:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/img/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/material.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
</head>

<body class="error-page">

    <div class="main-wrapper">
        <div class="error-box">
            <h1>404</h1>
            <h3><i class="fa-solid fa-triangle-exclamation"></i> Oops! Page not found!</h3>
            <p>The page you requested was not found.</p>
            <a href="{{ route('get.landingpage') }}" class="btn btn-custom">Back to Home</a>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
</body>

</html>
