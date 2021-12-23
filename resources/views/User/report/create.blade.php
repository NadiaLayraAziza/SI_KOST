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
                        </div>

                        <form action="{{ route('rpt.store') }}" method="post" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="keluhan" class="col-sm-12 col-md-2 col-form-label text-white">Keluhan</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="keluhan" id="keluhan" aria-describedby="keluhan" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row" hidden>
                                <label for="tanggal_report" class="col-md-4 col-form-label text-md-right">Tanggal</label>

                                <div class="col-md-6">
                                    <input id="tanggal_report" type="date" class="form-control" name="role" required autocomplete="tanggal_report" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}">
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <div class="col-12 mb-3" for="keluhan">
                                    <textarea name="keluhan" class="form-control w-100" id="keluhan" cols="30" rows="10" placeholder="Leave a comment here" required></textarea>
                                </div>
                                {{-- <div class="col-12 mb-3">
                                    <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment here"></textarea>
                                </div> --}}
                            {{-- </div> --}}
                            <div class="form-group row">
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn amado-btn w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->
@endsection
