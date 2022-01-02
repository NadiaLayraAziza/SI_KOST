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
            @foreach ($penyedia as $data)
            <div class="single-products-catagory clearfix">
                <a href="{{ route('DetailKost', $data->id_penyedia) }}">
                    <img class="d-block w-100" src="{{ asset($data->foto_kost) }}" style="width:400px;height:250px;" />
                    {{--  height="20" width="20" --}}
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>{{ $data->nama_kost }}</p>
                        <h4>{{ $data->alamat_kost }}</h4>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Item Kost Area End -->
</div>
@endsection
