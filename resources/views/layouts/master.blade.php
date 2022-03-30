<!DOCTYPE html>
<html lang="az">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title',config('app.name'))</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{asset('assets')}}/images/favicons/site.webmanifest">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <style id="" media="all">@font-face {
            font-family: 'Handlee';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/handlee/v12/-F6xfjBsISg9aMakDmo.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyeMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyfMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZg.ttf) format('truetype');
        }
        @font-face {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://ninetheme.com/fonts.gstatic.com/s/inter/v8/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZg.ttf) format('truetype');
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/odometer.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jarallax.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/agrikon-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nouislider.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nouislider.pips.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
</head>
<body>
<div class="preloader">
    <img class="preloader__image" width="55" src="{{asset('assets')}}/images/loader.png" alt="">
</div>
<div class="page-wrapper">

        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')
</div>
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>

    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{asset('assets')}}/images/logo-light.png" width="155" alt="" /></a>
        </div>

        <div class="mobile-nav__container"></div>

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="agrikon-icon-email"></i>
                <a href="https://ninetheme.com/cdn-cgi/l/email-protection#2a444f4f4e424f465a6a4b4d584341454404494547"><span class="__cf_email__" data-cfemail="254b4040414d404955654442574c4e4a4b0b464a48">[email&#160;protected]</span></a>
            </li>
            <li>
                <i class="agrikon-icon-telephone"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="{{asset('assets')}}/images/resources/flag-1-1.jpg" alt="">
                <label class="sr-only" for="language-select">select language</label>

                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div>
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

</div>

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>

    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label>
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>

</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/swiper.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets')}}/js/wow.js"></script>
<script src="{{asset('assets')}}/js/odometer.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.appear.min.js"></script>
<script src="{{asset('assets')}}/js/jarallax.min.js"></script>
<script src="{{asset('assets')}}/js/circle-progress.min.js"></script>
<script src="{{asset('assets')}}/js/wNumb.min.js"></script>
<script src="{{asset('assets')}}/js/nouislider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="{{asset('assets')}}/js/theme.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f2ac9c5fe72d3b6","token":"72b2ec455a104aa0b3ca4230f1da2518","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from ninetheme.com/themes/html-templates/agrikon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Mar 2022 20:14:09 GMT -->
</html>
