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
    <div class="single-product-area section-padding-50 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mt-50">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Kost</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{ asset('storage/'.$penyedia->foto_kost) }}">
                                    <img style="width:480px;height:300px;" src="{{ asset('storage/'.$penyedia->foto_kost) }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price"><font size="7">{{ $penyedia->nama_kost }}</font></p>
                        <h5>{{ $penyedia->alamat_kost }}</h5>
                    </div>

                    <div class="short_overview my-5">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td>Nama Kost </td>
                                        <td>: </td>
                                        <td>{{ $penyedia->nama_kost }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Kost </td>
                                        <td>: </td>
                                        <td>{{ $penyedia->alamat_kost }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pemilik </td>
                                        <td>: </td>
                                        <td>{{ $penyedia->users->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>No.Telepon </td>
                                        <td>: </td>
                                        <td>{{ $penyedia->users->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><h5>Peraturan Kost : </h5></p>
                            <textarea style="font-size: 12pt" class="form-control" rows="{{ $jum_baris }}" disabled>{{ $peraturan->peraturan }}</textarea>
                        </div>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" action="{{ route('PilihKamar', $penyedia->id_penyedia) }}">
                        <button type="submit" class="btn amado-btn">Pilih Kamar</button>
                    </form>
                    {{-- <a href="/booking/user" class="btn amado-btn">Pemesanan</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
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
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Details Area Start -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

</body>
@endsection
