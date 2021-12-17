@extends('layouts-admin.ViewAdmin')
@section('menu_penyedia')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Edit Data Penyedia Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penyedia</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
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
                            <form method="POST" action="{{ route('penyedia.update', $penyedia->id_penyedia) }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_user">Nama Lengkap</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyedia->users->nama }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Alamat Sesuai KTP</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyedia->users->alamat }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Email</label>
                                        <input class="form-control" type="email" name="id_user" id="id_user" value="{{ $penyedia->users->email }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">No Telepon</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyedia->users->no_hp }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nama_kost">Nama Kost</label>
                                        <input class="form-control" type="text" name="nama_kost" id="nama_kost" value="{{ $penyedia->nama_kost }}" aria-describedby="nama_kost" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_kost">Alamat Kost</label>
                                        <input class="form-control" type="text" name="alamat_kost" id="alamat_kost" value="{{ $penyedia->alamat_kost }}" aria-describedby="alamat_kost" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_kost">Foto Kost</label>
                                        <img width="200" height="200" @if($penyedia->foto_kost) src="{{ asset('storage/'.$penyedia->foto_kost) }}" @endif />
                                        <input class="uploads form-control" type="file" name="foto_kost" id="foto_kost" >
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <button type="submit" class="btn btn-info">Submit Button</button>
                                <button type="reset" class="btn btn-danger">Reset Button</button>
                            </form>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
