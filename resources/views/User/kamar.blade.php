@extends('layouts-user.ViewUser')

@section('home')
    active
@endsection

@section('content')
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="/"><img src="{{asset('assets-user/img/core-img/logo.png')}}" alt=""></a>
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
            <a href="/"><img src="{{asset('assets-user/img/core-img/logo-bejo.png')}}" alt=""></a>
        </div>
        <!-- Amado Nav -->
        @include('layouts-user.navbar')

    </header>
    <!-- Header Area End -->
    <!-- Item Kost Area Start -->
    <div class="products-catagories-area clearfix">
        @guest
        <div class="login-menu" style="padding: 20pt; padding-bottom: 50pt">
            <ul class="pull-right">
                <li><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
        @endauth
        <div class="amado-pro-catagory clearfix">
            <!-- Single Catagory -->
            @foreach ($kamar as $data)
            <div class="single-products-catagory clearfix">
                <a href="{{ route('DetailKamar', $data->id_kamar) }}">
                    <img height="300" src="{{ asset('storage/'.$data->Foto_kamar) }}"/>
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <h4>Tipe Kama: {{ $data->tipe_kamar }}</h4>
                        <p>Fasilitas: {{ $data->fasilitas }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Item Kost Area End -->
</div>
@endsection
