<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'My Laravel Store')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" />
</head>
<body style="padding: 0px;">
    @if(\Session::has('message'))
        @include('store.partials.message')
    @endif

    @include('store.partials.nav')


    @yield('content')

    @include('store.partials.footer')
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
<script>
$(document).ready(function(){
$('.btn-update-item').on('click', function(e){
    e.preventDefault();

    var id =$(this).data('id');
    var href =$(this).data('href');
    var quantity =$('#product_'+id).val();
    var slug =$(this).data('slug');

    window.location.href= href+"/cart/update/"+slug+"/"+quantity;
});
});
</script>
</body>
</html>