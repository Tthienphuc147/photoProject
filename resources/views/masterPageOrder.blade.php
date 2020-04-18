<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Tranh MT - Giữ Gìn Yêu Thương</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/public/home/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/vendors/animate-css/animate.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('/public/home/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/home/css/checkout.css') }}">
</head>

<body>
    <div class="wrapper">


        <!--================Header Menu Area =================-->
        @include('block.header')
        @yield('content')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/public/home/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/popper.js') }}"></script>
    <script src="{{ asset('/public/home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/stellar.js') }}"></script>
    <script src="{{ asset('/public/home/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/public/home/endors/isotope/isotope.pkgd.min.js') }}v"></script>
    <script src="{{ asset('/public/home/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/mail-script.js') }}"></script>
    <script src="{{ asset('/public/home/js/contact.js') }}"></script>
    <script src="{{ asset('/public/home/s/jquery.form.js') }}j"></script>
    <script src="{{ asset('/public/home/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/public/home/js/mail-script.js') }}"></script>
    <script src="{{ asset('/public/home/js/theme.js') }}"></script>
</body>

</html>
