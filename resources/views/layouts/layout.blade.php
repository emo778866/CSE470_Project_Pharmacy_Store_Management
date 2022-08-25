<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- common navigation bar --}}
    <link rel="icon" type="image/x-png" href="/img/logo.png">
    <div class="topnav" id="myTopnav">
        <img src="/img/nav-logo.png"h alt="" width="30px" height="30px">
        <a href="/homepage" class="float-right">Pharmacare</a>
        <a href="/search">Search</a>
        <a href="/humanResource">Human Resource</a>
        <a href="/returnList">Return List</a>
        <a href="/manufacturer">Manufacturer</a>
        <a href="/customer">Customer</a>
        </a>
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    {{-- <link rel="stylesheet" href="/css/materialize.min.css"> --}}

</head>

<body>
    @yield('content')
    <footer>Copyright@2022_DevelopedBy_Mehedi_Hasan_Emo</footer>
</body>
