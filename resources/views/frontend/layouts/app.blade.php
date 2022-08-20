<!DOCTYPE HTML>
<html lang="en">

<!-- robert/  03:29:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <title>Robert - One page HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">
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
                    <a href="#page4">Clients</a>
                </li>
                <li data-menuanchor="page5">
                    <a href="#page5">Projects</a>
                </li>
                <li data-menuanchor="page6">
                    <a href="#page6">Testimonials</a>
                </li>
                <li data-menuanchor="page7">
                    <a href="#page7">Contact</a>
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
                <div class="copy"><a href="templateshub.net">Templates Hub</a></div>
            </div>
        </div>

        <header class="navbar boxed">
            <div class="navbar-bg"></div>
            <a class="brand" href="#">
                <img class="brand-img" alt="" src="images/brand.png">
                <div class="brand-info">
                    <div class="brand-name">Robert</div>
                    <div class="brand-text">personal</div>
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
                    +96 56-85-1379
                </div>
                <div class="contact-item spacer">
                    /
                </div>
                <div class="contact-item">
                    <a href="http://paul-themes.com/cdn-cgi/l/email-protection#5b3834352f3a382f1b2934393e292f75383436"><span
                            class="__cf_email__"
                            data-cfemail="d0b3bfbea4b1b3a490a2bfb2b5a2a4feb3bfbd">[email&#160;protected]</span></a>
                </div>
            </div>
        </header>
        <div class="copy-bottom white boxed">© Robert 2019.</div>
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

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/animsition.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.pagepiling.min.js"></script>

    <script src="js/scripts.js"></script>
</body>

<!-- robert/  03:30:37 GMT -->

</html>
