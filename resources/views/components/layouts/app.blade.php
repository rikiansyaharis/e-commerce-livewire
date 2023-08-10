@extends('components.layouts.base')

@section('app')

    @yield('main')


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Javascript -->
    <script src="{{ asset('admin/assets/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/r-2.5.0/datatables.min.js"></script>

    <!-- Charts JS -->
    <script src="{{ asset('admin/assets/plugins/chart.js')}}/chart.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/index-charts.js')}}"></script>

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('admin/assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- Sweet alert JS-->
    <script  src="{{ asset('admin/assets/js/sweet-alert.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('admin/assets/js/app.js')}}"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>



@endsection
