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
                        <form method="POST" action="{{ route('penyewa.create') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->nama }}" required autocomplete="name" readonly>

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
                                    <input id="text-confirm" type="text" class="form-control" name="text_confirmation" value="{{ $user->alamat }}" required autocomplete="new-text" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Nomor HP/WA Ortu') }}</label>

                                <div class="col-md-6">
                                    <input id="text-confirm" type="text" class="form-control" name="text_confirmation" required autocomplete="new-text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Kamar') }}</label>

                                <div class="col-md-6">
                                    <input id="text-confirm" type="text" class="form-control" name="text_confirmation" required autocomplete="new-text" value="{{ $kamar->tipe_kamar }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Jangka Waktu') }}</label>

                                <div class="col-md-6">
                                    <select name="jangka_waktu" id="jangka_waktu" class="form-control">
                                        <option value="">== Pilih jangka waktu ==</option>
                                        <option value="tahunan">Tahunan</option>
                                        <option value="bulanan">Bulanan</option>
                                        <option value="mingguan">Mingguan</option>
                                        <option value="harian">Harian</option>
                                    </select>
                                    {{-- <input type="button" id="showVal" value="try" /> --}}
                                    <input id="demo" type="number" class="form-control" name="text_confirmation" required autocomplete="new-text" readonly>
                                    <script>
                                        function () {
                                            var sel = document.getElementById('janka_waktu');
                                            var el = document.getElementById('display');
                                            document.getElementById('showVal').onclick = function () {
                                            el.value = sel.value;
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Waktu') }}</label>

                                <div class="col-md-6">
                                    <input id="text-confirm" type="number" class="form-control" name="text_confirmation" required autocomplete="new-text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Mulai') }}</label>

                                <div class="col-md-6">
                                    <input id="text-confirm" type="date" class="form-control" name="text_confirmation" required autocomplete="new-text">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Hitung') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- kolom sebelah -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Cart Total') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('penyewa.create') }}">
                            <label for="text-confirm" class=" col-form-label text-md-right">Total</label>
                            <input id="text-confirm" type="text" class="form-control" name="text_confirmation" value="{{ $user->alamat }}" required autocomplete="new-text" readonly>
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
@endsection
