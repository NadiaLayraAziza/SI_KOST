@extends('layouts-admin.ViewAdmin')
@section('menu_penyewa', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Detail Data Penyewa Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penyewa</a></li>
            <li class="active">Detail</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <form>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_user">Nama Lengkap</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->nama }}" aria-describedby="id_user" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Alamat Sesuai KTP</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->alamat }}" aria-describedby="id_user" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Email</label>
                                        <input class="form-control" type="email" name="id_user" id="id_user" value="{{ $penyewa->users->email }}" aria-describedby="id_user" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">No Telepon</label>
                                        <input class="form-control" type="text" name="id_user" id="id_user" value="{{ $penyewa->users->no_hp }}" aria-describedby="id_user" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp_ortu">Telepon Ortu</label>
                                        <input class="form-control" type="text" name="telp_ortu" id="telp_ortu" value="{{ $penyewa->telp_ortu }}" aria-describedby="telp_ortu" placeholder="Disabled input" disabled="">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kost">Pilih Kost</label>
                                        <input class="form-control" type="text" name="kost" id="kost" value="{{ $penyewa->kost->nama_kost }}" aria-describedby="kost" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_kmr">Pilih Kamar</label>
                                        <input class="form-control" type="text" name="id_kmr" id="id_kmr" value="{{ $penyewa->id_kmr->tipe_kamar }}" aria-describedby="id_kmr" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="jangka_waktu">Pilih Jangka Waktu</label>
                                        <input class="form-control" type="text" name="jangka_waktu" id="jangka_waktu" value="{{ $penyewa->jangka_waktu }}" aria-describedby="jangka_waktu" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_waktu">Jumlah Waktu</label>
                                        <input class="form-control" type="number" name="jumlah_waktu" id="jumlah_waktu" value="{{ $penyewa->jumlah_waktu }}" aria-describedby="jumlah_waktu" placeholder="Disabled input" disabled="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_mulai">Tanggal Mulai</label>
                                        <input class="form-control" type="date" name="tgl_mulai" id="tgl_mulai" value="{{ $penyewa->tgl_mulai }}" aria-describedby="tgl_mulai" placeholder="Disabled input" disabled="">
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                {{-- <button type="submit" class="btn btn-info">Submit Button</button>
                                <button type="reset" class="btn btn-danger">Reset Button</button> --}}
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
