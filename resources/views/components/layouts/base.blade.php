<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Ecommerce | </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('admin/assets/css/portal.css') }}">

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> --}}

    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/r-2.5.0/datatables.min.css" rel="stylesheet">


    @livewireStyles
    @stack('style')
</head>
<body>

    @yield('app')


    @livewireScripts
    @stack('script')


</body>
</html>
