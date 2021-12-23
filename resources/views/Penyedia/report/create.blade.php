@extends('layouts-admin.ViewAdmin')
@section('menu_report_penyedia', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Create Report Penyedia Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Report</a></li>
            <li class="active">Create</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
          <div class="col-lg-20">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Create Report
                  </div>
         <div class="form-group row">
        <label for="id_kamar" class="col-sm-12 col-md-2 col-form-label text-white">Id Kamar</label>
        <div class="col-sm-12 col-md-8">
            <input class="form-control" type="text" name="id_kamar" id="id_kamar" aria-describedby="id_kamar" placeholder="">
        </div>
    </div>
    {{-- <div class="form ">
        <label for="id_user" class="col-sm-12 col-md-2 col-form-label text-white">Kamar</label>
    <div class="col-sm-24 col-md-10">
            <div class="input-group">
                <input id="id_kamar" type="text" class="form-control" readonly="" required>
                <input id="id_user" type="hidden" name="id_kamar" value="{{ ('id_kamar') }}" required readonly="">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><b>Cari Kamar </b><span class="fa fa-search"></span></button>
            </div>
    </div> --}}

    <div class="form-group  ">
        <label for="id_user" class="col-sm-12 col-md-2 col-form-label text-white">User</label>
    <div class="col-sm-24 col-md-10">
            <div class="input-group">
                <input id="id_user" type="text" class="form-control" readonly="" required>
                <input id="id_user" type="hidden" name="id_user" value="{{ ('id_user') }}" required readonly="">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><b>Cari User </b><span class="fa fa-search"></span></button>
            </div>
    </div>

    <div class="form-group row">
        <label for="keterangan" class="col-sm-12 col-md-2 col-form-label text-white">Keluhan</label>
        <div class="col-sm-12 col-md-8">
            <textarea class="form-control" rows="10" type="text" name="keterangan" id="keterangan" aria-describedby="keterangan" ></textarea>
    </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
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
