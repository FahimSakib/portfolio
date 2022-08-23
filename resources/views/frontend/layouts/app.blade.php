<!DOCTYPE HTML>
<html lang="en">

<!-- robert/  03:29:43 GMT -->

<head>
    <base href="{{ asset('/') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="asset/frontend/favicon.png">
    <link rel="apple-touch-icon" href="asset/frontend/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="asset/frontend/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="asset/frontend/apple-touch-icon-114x114.png">
    <title>@hasSection ('title')
        @yield('title')
    @else
        Portfolio
    @endif</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap" rel="stylesheet">
    <link href="asset/frontend/css/style.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="animsition">
        <div class="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

        <div class="click-capture"></div>

        <div class="menu">
            <span class="close-menu icon-cross2 right-boxed"></span>
            <ul class="menu-list right-boxed">
                <li data-menuanchor="page1">
                    <a href="#page1">Home</a>
                </li>
                <li data-menuanchor="page2">
                    <a href="#page2">About</a>
                </li>
                <li data-menuanchor="page3">
                    <a href="#page3">Resume</a>
                </li>
                <li data-menuanchor="page4">
                    <a href="#page4">Projects</a>
                </li>
                <li data-menuanchor="page5">
                    <a href="#page5">Contact</a>
                </li>
            </ul>
            <div class="menu-footer right-boxed">
                <div class="social-list">
                    <a href="#" class="icon ion-social-twitter"></a>
                    <a href="#" class="icon ion-social-facebook"></a>
                    <a href="#" class="icon ion-social-googleplus"></a>
                    <a href="#" class="icon ion-social-linkedin"></a>
                    <a href="#" class="icon ion-social-dribbble-outline"></a>
                </div>
            </div>
        </div>

        <header class="navbar boxed">
            <div class="navbar-bg"></div>
            <a class="brand" href="#">
                <img class="brand-img" alt="" src="asset/frontend/images/brand.png">
                <div class="brand-info">
                    <div class="brand-name">{{ !empty($heroSection->brandName) ? $heroSection->brandName : 'Fahim' }}</div>
                    <div class="brand-text">{{ !empty($heroSection->brandText) ? $heroSection->brandText : 'Sakib' }}</div>
                </div>
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
                aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="contacts d-none d-md-block">
                <div class="contact-item">
                    +{{ !empty($heroSection->mobile) ? $heroSection->mobile : '0123456789' }}
                </div>
                <div class="contact-item spacer">
                    /
                </div>
                <div class="contact-item">
                    <a href="mailto:{{ !empty($heroSection->email) ? $heroSection->email : 'example@mail.com' }}"><span
                            class="__cf_email__">{{ !empty($heroSection->email) ? $heroSection->email : 'example@mail.com' }}</span></a>
                </div>
            </div>
        </header>
        <div class="copy-bottom white boxed">© Fahim Sakib 2022.</div>
        <div class="social-list social-list-bottom boxed">
            <a href="#" class="icon ion-social-twitter"></a>
            <a href="#" class="icon ion-social-facebook"></a>
            <a href="#" class="icon ion-social-googleplus"></a>
            <a href="#" class="icon ion-social-linkedin"></a>
            <a href="#" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="pagepiling">
            @yield('content')
        </div>
    </div>
    @include('sweetalert::alert')
    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="asset/frontend/js/jquery.min.js"></script>
    <script src="asset/frontend/js/wow.min.js"></script>
    <script src="asset/frontend/js/smoothscroll.js"></script>
    <script src="asset/frontend/js/animsition.js"></script>
    <script src="asset/frontend/js/jquery.validate.min.js"></script>
    <script src="asset/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="asset/frontend/js/owl.carousel.min.js"></script>
    <script src="asset/frontend/js/jquery.pagepiling.min.js"></script>

    <script src="asset/frontend/js/scripts.js"></script>
</body>

<!-- robert/  03:30:37 GMT -->

</html>
