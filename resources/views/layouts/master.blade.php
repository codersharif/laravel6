<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="{{ asset('public/css/default.css')}}" rel="stylesheet"/>
        <link href="{{ asset('public/css/fonts.css')}}" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>
    <body>
        <div id="header-wrapper">
            <!--header-->
            @include('layouts.header')
            <!--end header-->
            
            <!--header cover-->
             @yield('background')
            <!--end cover-->
        </div>

        <div id="wrapper">
            <div id="page" class="container">
                <!--content-->
                @yield('content')
                <!--end content-->
            </div>
        </div>
        <!--footer-->
        @include('layouts.footer')
        <!--end footer-->