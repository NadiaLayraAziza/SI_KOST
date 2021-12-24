@extends('layouts-admin.ViewAdmin')
@section('menu_kamar', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Create Data Kamar Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Kamar</a></li>
            <li class="active">Create</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="card">
                            <div class="card-header">
                                <h3>Tambah Super Admin</h3><br><br>
                            </div>
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
                                <form method="post" action="/admin" id="myForm" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label for="tipe_kamar">Type Kost</label>
                                        <input type="tipe_kamar" name="tipe_kamar" class="form-control" id="tipe_kamar" aria-describedby="tipe_kamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="Foto_Kamar">Foto Kamar</label>
                                        <input class="form-control upload" type="file" name="Foto_Kamar" id="Foto_Kamar" aria-describedby="Foto_Kamar">
                                    </div>
                                    <div class="form-group">
                                        <label for="fasilitas">Fasilitas</label>
                                        <textarea class="form-control" rows="5" type="fasilitas" name="fasilitas" id="fasilitas" aria-describedby="fasilitas"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Harga_Tahunan">Harga Tahunan</label>
                                        <input class="form-control" type="number" name="Harga_Tahunan" id="Harga_Tahunan" aria-describedby="Harga_Tahunan">
                                    </div>
                                    <div class="form-group">
                                        <label for="Harga_bulanan">Harga Bulanan</label>
                                        <input class="form-control" type="number" name="Harga_bulanan" id="Harga_bulanan" aria-describedby="Harga_bulanan">
                                    </div>
                                    <div class="form-group">
                                        <label for="Harga_mingguan">Harga Mingguan</label>
                                        <input class="form-control" type="number" name="Harga_mingguan" id="Harga_mingguan" aria-describedby="Harga_mingguan">
                                    </div>
                                    <div class="form-group">
                                        <label for="Harga_harian">Harga Harian</label>
                                        <input class="form-control" type="number" name="Harga_harian" id="Harga_harian" aria-describedby="Harga_harian">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah Kamar</label>
                                        <input class="form-control" type="number" name="jumlah" id="jumlah" aria-describedby="jumlah">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
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
