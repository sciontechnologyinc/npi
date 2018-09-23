<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NPI Machinery</title>
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="{{ asset('css/full-slider.css') }}">
     <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/website.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
    <!-- Custom styles for this template -->
</head>
<body>
        <div class="main">
            @include('website.partial.header')
            @yield('content')
            @include('website.partial.footer')
        </div>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/js/website.js')}}"></script>
</body>
</html>