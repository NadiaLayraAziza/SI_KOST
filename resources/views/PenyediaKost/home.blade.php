@extends('layouts-admin.ViewAdmin')
@section('home_penyedia')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Selamat Datang {{Auth::user()->nama}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Dashboard</a></li>
        </ol>
    </div>
    @foreach ($penyedia as $data)
    <div id="page-inner">
        <div class="container">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h2>Info Kost {{ $data->nama_kost }}</h2>
                    <div class="col-lg-5">
                        <img style="padding-top: 40pt" src="{{ asset('storage/'.$data->foto_kost) }}" height="220" />
                    </div>
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td><h4>Nama Kost </h4></td>
                                        <td><h4>: </h4></td>
                                        <td><h4>{{ $data->nama_kost }}</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Pemilik </h4></td>
                                        <td><h4>: </h4></td>
                                        <td><h4>{{Auth::user()->nama}}</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Alamat Kost </h4></td>
                                        <td><h4>: </h4></td>
                                        <td><h4>{{ $data->alamat_kost }}</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>No.Telepon </h4></td>
                                        <td><h4>: </h4></td>
                                        <td><h4>{{Auth::user()->no_hp}}</h4></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                        </table>
                        </div>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p> --}}
                    </div>
                    <p>
                        <a class="btn btn-primary btn-lg" role="button" href="{{ route('HomePenyedia.edit', $data->id_penyedia) }}">Edit Data</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h2>Peraturan Kost {{ $data->nama_kost }}</h2>
                    @if($peraturan->isEmpty())
                        <h4>Belum Ada Peraturan</h4>
                        <p>
                            <a class="btn btn-primary btn-lg" role="button" href="{{ route('peraturan.create') }}">Create Data</a>
                        </p>
                    @else
                    @foreach ($peraturan as $pr)
                    <div class="col-lg-12">
                        <div class="form-group"><br>
                            <textarea style="font-size: 14pt" class="form-control" rows="{{ $jum_baris }}" type="peraturan" name="peraturan" id="peraturan" aria-describedby="peraturan" disabled>{{ $pr->peraturan }}</textarea>
                        </div>
                    </div>
                    {{-- <p>{{ $pr->peraturan }}</p> --}}
                    <p>
                        <a class="btn btn-primary btn-lg" role="button" href="{{ route('peraturan.edit', $pr->id_peraturan) }}">Edit Data</a>
                    </p>
                    @endforeach
                    @endif
                    {{-- @endif --}}

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    @endforeach
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
