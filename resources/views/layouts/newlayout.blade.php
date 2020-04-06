<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>



    <!-- Fonts -->


     @include('../frontend.partials.head')
    <!-- Styles -->
 </head>
<body>
    <div id="app">
<div class="content">
    @include('../frontend.partials.header')
    <br><br>
    <br><br><br>
    @yield('content')

        @include('../frontend.partials.footer')
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/wow.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/slick.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.li-scroller.1.0.js')}}"></script>
        <script src="{{asset('front/js/jquery.newsTicker.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.fancybox.pack.js')}}"></script>
        <script src="{{asset('front/js/custom.js')}}"></script>
    </div>
    </div>
</body>
</html>
