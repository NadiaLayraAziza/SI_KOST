@extends('layouts-user.ViewUser')
@section('profile')
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
                    <div class="card-header">{{ __('Formulir Daftarkan Kost') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="/daftarkos/simpan" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="nama_kost" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kost') }}</label>
                                <div class="col-md-6">
                                    <input id="nama_kost" type="text" class="form-control" name="nama_kost" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_kost" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Kost') }}</label>
                                <div class="col-md-6">
                                    <input id="alamat_kost" type="text" class="form-control" name="alamat_kost" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto_kost" class="col-md-4 col-form-label text-md-right">Foto Kost</label>
                                <div class="col-md-6">
                                    <input id="foto_kost" class="uploads form-control" type="file" name="foto_kost">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
