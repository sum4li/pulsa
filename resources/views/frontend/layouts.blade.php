@php
    function setting($slug){
        return App\Setting::where('slug',$slug)->get()->first()->description;
    }
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="digsa.id">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.9.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/toko-pulsa-blue-300x101.png" type="image/x-icon">
    <meta name="keywords" content="{{setting('keywords')}}, @yield('keywords')">
    {!! SEOMeta::generate() !!}

    {!! OpenGraph::generate() !!}
    <title>{{setting('title')}} | Home</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/animatecss/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        .breadcrumb {
            padding: 0;
            background-color: transparent;
            border-radius: 0;
            margin-top: 10px;
        }

        .breadcrumb-item a,
        .breadcrumb-item {
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .breadcrumb-item a:hover,
        .breadcrumb-item:hover {
            color: #ccc;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .breadcrumb-item.active{
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        ul.footer-text{
            list-style: none;
            padding-left: 0;
        }
        ul.footer-text > li > span{
            color: #e5131d;
            font-weight: bold;
        }
    </style>
</head>
<body>
        @include('frontend.component.header')
        @if (request()->route()->getName() == 'index.index')
            @include('frontend.component.slideshow')

            @include('frontend.component.description')

            @include('frontend.component.register')

            @include('frontend.component.testimoni')

        @else
            @include('frontend.component.breadcrumb')

        @endif

        @yield('content')



        @include('frontend.component.cta-android')
        @include('frontend.component.footer')

        <script src="{{asset('frontend/assets/web/assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/assets/popper/popper.min.js')}}"></script>
        <script src="{{asset('frontend/assets/tether/tether.min.js')}}"></script>
        <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/smoothscroll/smooth-scroll.js')}}"></script>
        <script src="{{asset('frontend/assets/dropdown/js/script.min.js')}}"></script>
        <script src="{{asset('frontend/assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
        <script src="{{asset('frontend/assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
        <script src="{{asset('frontend/assets/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
        <script src="{{asset('frontend/assets/vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
        <script src="{{asset('frontend/assets/mbr-testimonials-slider/mbr-testimonials-slider.js')}}"></script>
        <script src="{{asset('frontend/assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
        <script src="{{asset('frontend/assets/theme/js/script.js')}}"></script>
        <script src="{{asset('frontend/assets/slidervideo/script.js')}}"></script>
        @stack('scripts')

        <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
            <a style="text-align: center;">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
        <input name="animation" type="hidden">
    </body>
</html>
