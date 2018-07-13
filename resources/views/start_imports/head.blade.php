<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ __('validation.sections.'.'Grocery') }}  {{ __('validation.sections.'.'Store') }}</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //font-awesome icons -->
    <!-- js -->
    {{--<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>--}}
    <script src="{{ asset('js/jquery331.js') }}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/minicart.js')}}"></script>
    <!-- start-smoth-scrolling -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/Custom/headerAnimate.js')}}" defer></script>
    <link rel="icon" href="{{ asset('images/main_icon.png') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
</head>