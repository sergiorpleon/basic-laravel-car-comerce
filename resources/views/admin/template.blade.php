<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Laravel Store')</title>

    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/admin/font-awesome/css/font-awesome.min.css') }}" />
    <!-- link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" / -->
</head>
<body>

    @if(\Session::has('message'))
        @include('admin.partials.message')
    @endif

    @include('admin.partials.nav')

    <br/>
    <br/>
    @yield('content')

    @include('admin.partials.footer')
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script>
$(document).ready(function(){

});
</script>
</body>
</html>