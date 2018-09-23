<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NPI Machinery</title>
    <link rel="stylesheet" href="{!! asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.addons.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
    <link rel="stylesheet" href="css/admin.css">
    
    <!-- endinject -->
</head>
<body>
        <div class='main'>\
            <div class="flex-center position-ref full-height">
                <div class="container-scroller">
                        @include('admin.partial.header')
                        <div class="container-fluid page-body-wrapper">
                        @include('admin.partial.sidepanel')
                        @yield('content')
                        </div>
                </div>
            </div>
        </div>
<!-- plugins:js -->
  <script src="{!! asset('vendors/js/vendor.bundle.base.js') !!}"></script>
  <script src="{!! asset('vendors/js/vendor.bundle.addons.js') !!}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{!! asset('js/off-canvas.js') !!}"></script>
  <script src="{!! asset('js/misc.js') !!}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{!! asset('js/dashboard.js') !!}"></script>
  <!-- End custom js for this page-->
</body>
</html>