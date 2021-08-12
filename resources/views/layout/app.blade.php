<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Kantin FTI | @yield('title')</title>
</head>

<body>

    @include('navbar.top-navbar')

    @yield('content')
    <footer class="bg-primary text-white text-center text-lg-start">
        <div class="container p-4">
            <div class="row align-items-center ">
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0 text-left">
                    <h5 class="text-uppercase left">kantin fti</h5>
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0 d-flex justify-content-around ">
                    <img src="{{ asset('assets/img/uksw.png') }}" alt="UKSW" class="icon-footer">
                    <img src="{{ asset('assets/img/fti.png') }}" alt="FTI" class="icon-footer">
                    <img src="{{ asset('assets/img/lk.png') }}" alt="LK" class="icon-footer">
                </div>
                <div class="col-lg-4 col-md-4 mb-4 mb-md-0 list-menu">
                    <ul class="list-unstyled mb-0 float-lg-end float-md-end float-sm-center float-xs-center">
                        <li>
                            <a href="#" class="footer-link">Halaman Utama</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Produk</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Checkout</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Menu 4</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">Menu 5</a>
                        </li>
                    </ul>
                </div>
                <!-- </div> -->
            </div>
    </footer>

    
    <!-- <script src="//kit.fontawesome.com/03dff2321c.js" crossorigin="anonymous"></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @stack('scripts')
</body>

</html>
