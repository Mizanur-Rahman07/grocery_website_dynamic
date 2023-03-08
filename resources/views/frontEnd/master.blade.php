<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- font owsam.com -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/bootstrap.min.css">
    <!-- light box photo gallery -->
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/lightbox.min.css" />

    <!-- slick slide css -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/assets/css/responsive.css">
    <title>@yield('title')</title>
</head>

<body>
    <!--Header Area Start-->
    @include('frontEnd.include.header')
    <!-- End of Header Area -->
    @yield('content')
    <!-- Footer area  Start-->
    @include('frontEnd.include.footer')
    <!-- End of Footer area -->

    <!-- jquery light box cdn -->
    <script src="{{asset('frontEndAsset')}}/assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="{{asset('frontEndAsset')}}/assets/js/bootstrap.bundle.min.js"></script>
    <!-- slick slide cdn -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- slick slide cdn -->
    <script src="{{asset('frontEndAsset')}}/assets/js/main.js"></script>
</body>

</html>