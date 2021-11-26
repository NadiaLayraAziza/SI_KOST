@extends('layouts-user.ViewUser')
{{-- @section('menu_barang', 'active') --}}
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
        <!-- Social Button -->
        {{-- <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div> --}}
    </header>
    <!-- Header Area End -->

    <!-- Product Catagories Area Start -->
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/1.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $180</p>
                        <h4>Modern Chair</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/2.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $180</p>
                        <h4>Minimalistic Plant Pot</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/3.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $180</p>
                        <h4>Modern Chair</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/4.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $180</p>
                        <h4>Night Stand</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/5.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $18</p>
                        <h4>Plant Pot</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/6.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $320</p>
                        <h4>Small Table</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/7.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $318</p>
                        <h4>Metallic Chair</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/8.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $318</p>
                        <h4>Modern Rocking Chair</h4>
                    </div>
                </a>
            </div>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="{{asset('assets-user/img/bg-img/9.jpg')}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $318</p>
                        <h4>Home Deco</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Product Catagories Area End -->
</div>
@endsection
