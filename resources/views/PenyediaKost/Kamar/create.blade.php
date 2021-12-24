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
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Type Kost</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Kamar</label>
                                        <input class="form-control" type="file">
                                    </div>
                                    <div class="form-group">
                                        <label>Fasilitas</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Tahunan</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Bulanan</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Mingguan</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Harian</label>
                                        <input class="form-control">
                                    </div>
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
