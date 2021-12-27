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
                        <form method="POST" action="{{ route('penyewa.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" id="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->nama }}" required autocomplete="name" readonly>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Alamat (Sesuai KTP)') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" name="text_confirmation" value="{{ $user->alamat }}" required autocomplete="new-text" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Nomor HP/WA Ortu') }}</label>

                                <div class="col-md-6">
                                    <input id="telp_ortu" type="text" class="form-control" name="telp_ortu" required autocomplete="new-text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Kamar') }}</label>

                                <div class="col-md-6">
                                    <input id="id_kamar" type="text" class="form-control" name="id_kamar" required autocomplete="new-text" value="{{ $kamar->id_kamar }}" readonly>
                                    <input id="id_kamar" type="text" class="form-control" name="id_penyedia" required autocomplete="new-text" value="{{ $kamar->id_penyedia }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Jangka Waktu') }}</label>

                                <div class="col-md-6">
                                    <select name="jangka_waktu" id="jangka_waktu" class="form-control jangka">
                                        <option value="">== Pilih jangka waktu ==</option>
                                        <option value="1000">Tahunan</option>
                                        <option value="100">Bulanan</option>
                                        <option value="10">Mingguan</option>
                                        <option value="1">Harian</option>
                                    </select>
                                    {{-- <input type="button" id="showVal" value="try" /> --}}

                                </div>

                            </div>
                            <div class="form-group row">

                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">Harga</label>
                                <div class="col-md-6">
                                    <p id="harga">Harga</p>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Waktu') }}</label>

                                <div class="col-md-6">
                                    <input type="text" id="jumlah_waktu" name="jumlah_waktu" class="form-control" placeholder="Jumlah Waktu">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Mulai') }}</label>

                                <div class="col-md-6">
                                    <input id="tgl_mulai" type="date" class="form-control" name="tgl_mulai" required autocomplete="new-text">
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Hitung') }}
                                    </button>
                                </div>
                            </div> --}}

                    </div>
                </div>
            </div>

            <!-- kolom sebelah -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Cart Total') }}</div>

                    <div class="card-body">

                            @csrf
                            <label for="text-confirm" class=" col-form-label text-md-right">Total</label>
                            <input type="text" id="harga_sewa" name="harga_sewa"class="form-control" placeholder="Total" readonly>
                        </br>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $("select.jangka").change(function(){
        var selectedJangka = $(this).children("option:selected").val();
        //alert("You have selected the country - " + selectedJangka);
        document.getElementById('harga').textContent = selectedJangka;
    });

        $("#jumlah_waktu").keyup(function() {
            var harga  = $("#harga").text();
            var jumlah = $("#jumlah_waktu").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#harga_sewa").val(total);
        });
    });
</script>
@endsection
