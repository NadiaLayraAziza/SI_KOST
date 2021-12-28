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
                            <li class="breadcrumb-item active" aria-current="page">Detail Kamar</li>
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
                                <a class="gallery_img" href="{{ asset('storage/'.$kamar->Foto_Kamar) }}">
                                    <img style="width:480px;height:300px;"  @if($kamar->Foto_Kamar) src="{{ asset('storage/'.$kamar->Foto_Kamar) }}" @endif>
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
                        <p class="product-price"><font size="7">{{ $kamar->tipe_kamar }}</font></p>
                        <h5>{{ $kamar->alamat_kost }}</h5>
                    </div>

                    <div class="short_overview my-5">
                        <p>Fasilitas : </p>
                        <textarea style="font-size: 12pt" class="form-control" rows="{{ $jum_baris }}" disabled>{{ $kamar->fasilitas }}</textarea>
                        <br>
                        <p>Harga Per-Tahun: Rp. {{ $kamar->Harga_Tahunan }}</p>
                        <p>Harga Per-Bulan: Rp. {{ $kamar->Harga_bulanan }}</p>
                        <p>Harga Per-Mingguan: Rp. {{ $kamar->Harga_mingguan }}</p>
                        <p>Harga Per-Harian: Rp. {{ $kamar->Harga_harian }}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" action="{{ route('Booking', $kamar->id_kamar) }}">
                        <button type="submit" class="btn amado-btn">Pesan Sekarang</button>
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
