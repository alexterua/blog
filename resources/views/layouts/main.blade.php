<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        @include('include.menu')
    </div>
</header>

@yield('content')

<footer class="edica-footer" data-aos="fade-up" style="padding-top: 80px; padding-bottom: 30px;">
    <div class="container">
        <div class="row footer-widget-area" style="padding-bottom: 30px;">
            <div class="col-md-3">
                <a href="{{ route('main.index') }}" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">test@example.com</p>
                <p class="contact-details">+38-(098)-99-58-600</p>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav d-flex">
                    <a href="{{ route('main.index') }}" class="nav-link">Home</a>
                    <a href="{{ route('post.index') }}" class="nav-link">Blog</a>
                    <a href="#" class="nav-link">About</a>
                    <a href="#" class="nav-link">Contact</a>
                </nav>
            </div>
        </div>
        <div class="footer-bottom-content" style="max-height: 60px;">
            <p class="mb-0">© Blog | 2022 | All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>

