<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sensive</title>
        <link rel="icon" href="{{ asset('site/img/Fevicon.png') }}" type="image/png">

        @section('style')
        <link rel="stylesheet" href="{{ asset('site/vendors/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/owl-carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
        @show
    </head>
    <body>

        @include('site.template.menu')

        @section('content')



        @show

        @include('site.template.footer')

        @section('script')
        <script src="{{ asset('site/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('site/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('site/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('site/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('site/js/mail-script.js') }}"></script>
        <script src="{{ asset('site/js/main.js') }}"></script>
        @show
    </body>
</html>