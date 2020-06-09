<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
@stack('dot')
<!-- Bootstrap core CSS-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('employe/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('employe/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('employe/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('employe/css/employee.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

@include('admin.partials._topNav')


<div class="content-wrapper">

@yield('content')
{{--<footer class="sticky-footer">--}}
{{--<div class="container">--}}
{{--<div class="text-center">--}}
{{--<small>Copyright © BDSOFTECH 2018</small>--}}
{{--</div>--}}
{{--</div>--}}
{{--</footer>--}}
<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

</div>
<script src="{{ asset('employe/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('employe/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('employe/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('employe/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('employe/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('employe/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('employe/js/sb-admin.min.js') }}"></script>
<!-- Custom scripts for this page-->
<script src="{{ asset('employe/js/sb-admin-datatables.min.js') }}"></script>
<script src="{{ asset('employe/js/sb-admin-charts.min.js') }}"></script>

@stack('js')

</body>
</html>