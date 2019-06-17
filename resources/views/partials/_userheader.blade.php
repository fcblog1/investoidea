<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="keywords" content="{{$meta_key}}">
    <meta name="description" content="{{$meta_des}}">
    <meta property="og:image" content="{{ asset('images/'.$og) }}">

  <title>{{$title}} @yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href= "{{ asset('css/custom.css')}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- custom style -->
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
<style>
  #usernav{
      background: {{ $nav_back }};
    }
    #navitem .nav-item a{
      color: {{ $nav_fontcol }};
    }

    </style>
</head>
