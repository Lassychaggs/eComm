<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Latest compiled and minified CSS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm</title>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</body>
<style>
    img.slider-img{
        height: 400px !important
    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #0762044d;
    }
    .trending-wrapper{
        margin: 30px;

    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .detail-img{
        height: 300px;
    }
    .search{
        width: 600px
    }
    .cart-list-divider{
        border-bottom: 1px solid rgb(138, 139, 138);
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>