<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DrawLog') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DrawLog - Bienvenido</title>
</head>
<body>
@if(Auth::user()->hasRole('admin'))
  @include('IntAdmin.navbar')
@elseif(Auth::user()->hasRole('user'))
  @include('IntUsers.navbar')
@endif
@yield('content')
<!-- Scripts -->
@include('sweetalert::alert')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>