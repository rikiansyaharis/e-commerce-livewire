@extends('components.layouts.app')

@section('main')
<div class="app">
    @include('components.layouts.partials.topbar')

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                @yield('content-wrapper')

            </div><!--//container-fluid-->
        </div>
    </div>
</div>
@endsection
