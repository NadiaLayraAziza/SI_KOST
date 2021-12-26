@extends('layouts-admin.ViewAdmin')
@section('menu_kamar', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Edit Data Kamar Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Kamar</a></li>
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
                                <form id="myForm" action="{{ route('kamar.edit', $kamar->id_kamar) }}">
                                    @csrf
                                        <div class="form-group">
                                            <label for="tipe_kamar">Type Kost</label>
                                            <input type="tipe_kamar" name="tipe_kamar" class="form-control" id="tipe_kamar" value="{{ $kamar->tipe_kamar }}" aria-describedby="tipe_kamar" readonly>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="Foto_Kamar">Foto Kamar</label>
                                            <img height="300" src="{{ asset('storage/'.$kamar->foto_kamar) }}"/>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="Foto_Kamar">Foto Kamar</label>
                                            <input class="form-control upload" type="file" name="Foto_Kamar" id="Foto_Kamar" aria-describedby="Foto_Kamar" >
                                        </div>
                                        <div class="form-group">
                                            <label for="fasilitas">Fasilitas</label>
                                            <textarea class="form-control" rows="5" type="fasilitas" name="fasilitas" id="fasilitas" aria-describedby="fasilitas" readonly >{{ $kamar->fasilitas }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="Harga_Tahunan">Harga Tahunan</label>
                                            <input class="form-control" type="number" name="Harga_Tahunan" id="Harga_Tahunan" value="{{ $kamar->Harga_Tahunan }}" aria-describedby="Harga_Tahunan" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Harga_bulanan">Harga Bulanan</label>
                                            <input class="form-control" type="number" name="Harga_bulanan" id="Harga_bulanan" value="{{ $kamar->Harga_bulanan }}" aria-describedby="Harga_bulanan" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Harga_mingguan">Harga Mingguan</label>
                                            <input class="form-control
                                            " type="number" name="Harga_mingguan" id="Harga_mingguan" value="{{ $kamar->Harga_mingguan }}" aria-describedby="Harga_mingguan" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="Harga_harian">Harga Harian</label>
                                            <input class="form-control" type="number" name="Harga_harian" id="Harga_harian" value="{{ $kamar->Harga_harian }}" aria-describedby="Harga_harian" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah">Jumlah Kamar</label>
                                            <input class="form-control" type="number" name="jumlah" id="jumlah" value="{{ $kamar->jumlah }}" aria-describedby="jumlah" readonly>
                                        </div>
                                    </form>
                                        <div class="form-group">
                                            <button type="back" class="btn btn-success" onclick="history.back()">Back</button>
                                            <a class="btn btn-info" href="{{ route('kamar.edit', $kamar->id_kamar) }}">
                                                Edit
                                            </a>
                                        </div>

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
