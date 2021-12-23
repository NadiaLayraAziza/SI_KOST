@extends('layouts-user.ViewUser')
@section('report')
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
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Keluhan</h2>
                            <div class="col-md-40 col-sm-12 text-right">
                                <a class="btn btn-warning" href="{{ route('ReportUser.create') }}"> Create Data </a>
                            </div>
                        </div>
                        <br>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($report as $re => $data)
                                    <tr>
                                        <td class="cart_product_desc">
                                            <h5>{{ $data->tanggal_report }}</h5>
                                        </td>
                                        <td class="price">
                                            <span>{{ $data->keluhan }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->
@endsection
