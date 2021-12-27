@extends('layouts-user.ViewUser')
@section('booking')
    active
@endsection
@section('content')
<div class="main-content-wrapper d-flex clearfix">
    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="{{asset('assets-user/img/core-img/logo.png')}}" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img src="{{asset('assets-user/img/core-img/logo-bejo.png')}}" alt=""></a>
        </div>

        <!-- Amado Nav -->
        @include('layouts-user.navbar')

    </header>
    <!-- Header Area End -->

    <div class="container" style="padding-top: 68pt;padding-bottom: 68pt">
        <div class="row justify-content">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Formulir Booking') }}</div>
                    <div class="card-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
