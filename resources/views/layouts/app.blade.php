@extends('layouts.structure')
@section('body_structure')
    @guest
        @include('layouts.header_portal')
    @else
        @include('layouts.header')
    @endguest
    <!-- Page Loader -->
    <div id="pageloader">
        <div class="loader-inner">
            <img src="{{asset('images/default/preloader.gif')}}" alt="">
        </div>
    </div><!-- Page Loader -->
<div id="app">
    @if(session('info'))
        <div class ="container">
            <div class ="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class ="alert alert-success">
                        {{ session('info') }}
                    </div>

                </div>

            </div>
        </div>
    @endif
    @yield('content')
</div>
    @include('layouts.footer')
@endsection
@section('head_structure')
    @yield('css')

    <link rel="stylesheet" href="{{asset('css/lib/univershicon.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/lib/timeline.css')}}">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme-responsive.css')}}">


    <!--[if IE]>
    <link rel="stylesheet" href="{{asset('css/ie.css')}}">
    <![endif]-->

    <!-- Skins CSS -->
    <link rel="stylesheet" href="{{asset('css/skins/default.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endsection
@section('script_structure')
    <link rel="stylesheet" href="{{asset('css/lib/animate.min.css')}}">
    <script src="{{asset('js/lib/bootstrapValidator.min.js')}}"></script>
    <script src="{{asset('js/lib/jquery.appear.js')}}"></script>
    <script src="{{asset('js/lib/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/lib/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/lib/countdown.js')}}"></script>
    <script src="{{asset('js/lib/counter.js')}}"></script>
    <script src="{{asset('js/lib/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/lib/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('js/lib/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('js/lib/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/lib/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/lib/menu.js')}}"></script>

    <script src="{{asset('js/lib/modernizr.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('js/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('scripts')
@endsection
