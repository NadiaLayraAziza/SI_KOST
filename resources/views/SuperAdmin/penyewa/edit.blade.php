@extends('layouts-admin.ViewAdmin')
@section('menu_penyewa')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Edit Data Penyewa Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penyewa</a></li>
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
                            <form method="POST" action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_user">Nama Lengkap</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->nama }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Alamat Sesuai KTP</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->alamat }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Email</label>
                                        <input class="form-control" type="email" name="id_user" id="id_user" value="{{ $penyewa->users->email }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">No Telepon</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->no_hp }}" aria-describedby="id_user" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp_ortu">Telepon Ortu</label>
                                        <input class="form-control" type="text" name="telp_ortu" id="telp_ortu" value="{{ $penyewa->telp_ortu }}" aria-describedby="telp_ortu" placeholder="">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kost">Pilih Kost</label>
                                        <select class="form-control" name="kost" id="kost">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kmr">Pilih Kamar</label>
                                        <select class="form-control" name="id_kmr" id="id_kmr">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jangka_waktu">Pilih Jangka Waktu</label>
                                        <select class="form-control" name="jangka_waktu" id="jangka_waktu">
                                            <option></option>
                                            <option value="harian" {{$data->jangka_waktu === "harian" ? "selected" : ""}} >Harian</option>
                                            <option value="mingguan" {{$data->jangka_waktu === "mingguan" ? "selected" : ""}} >Mingguan</option>
                                            <option value="bulanan" {{$data->jangka_waktu === "bulanan" ? "selected" : ""}} >Mingguan</option>
                                            <option value="tahunan" {{$data->jangka_waktu === "tahunan" ? "selected" : ""}} >Tahunan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_waktu">Jumlah Waktu</label>
                                        <input class="form-control" type="number" name="jumlah_waktu" id="jumlah_waktu" value="{{ $penyewa->jumlah_waktu }}" aria-describedby="jumlah_waktu" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_mulai">Tanggal Mulai</label>
                                        <input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai" value="{{ $penyewa->tgl_mulai }}" aria-describedby="tgl_mulai" placeholder="">
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
