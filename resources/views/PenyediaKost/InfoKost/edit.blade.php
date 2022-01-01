@extends('layouts-admin.ViewAdmin')
@section('home_penyedia')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Edit Info Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Info Kost</a></li>
            <li class="active">Edit</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('HomePenyedia.update', $penyedia->id_penyedia) }}" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group">
                                            <label for="foto_kost">Foto Kost</label>
                                            <img width="200" height="120" @if($penyedia->foto_kost) src="{{ asset('storage/'.$penyedia->foto_kost) }}" @endif />
                                            <input class="upload form-control" type="file" name="foto_kost" id="foto_kost">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kost">Nama Kost</label>
                                            <input type="nama_kost" name="nama_kost" class="form-control" id="nama_kost" value="{{ $penyedia->nama_kost }}" aria-describedby="nama_kost">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_kost">Alamat Kost</label>
                                            <input class="form-control" type="alamat_kost" name="alamat_kost" id="alamat_kost" value="{{ $penyedia->alamat_kost }}" aria-describedby="alamat_kost">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Pemilik</label>
                                            <input class="form-control" type="text" name="nama" id="nama" value="{{ $penyedia->users->nama }}" aria-describedby="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No.Telepon</label>
                                            <input class="form-control" type="text" name="no_hp" id="no_hp" value="{{ $penyedia->users->no_hp }}" aria-describedby="no_hp">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info">Submit Button</button>
                                        </div>
                                </form>
                            </div>
                          <!-- /.col-lg-6 (nested) -->
                        </div>
                      <!-- /.row (nested) -->
                    </div>
                  <!-- /.panel-body -->
              </div>
              <!-- /.panel -->
          </div>
          <!-- /.col-lg-12 -->
      </div>
      <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
      </div>
       <!-- /. PAGE INNER  -->
      </div>
   <!-- /. PAGE WRAPPER  -->
  </div>
<!-- /. WRAPPER  -->
@endsection
