@extends('layouts-admin.ViewAdmin')
@section('menu_kamar', 'active')
<div id="page-wrapper" >
    <div class="header">
                  <h1 class="page-header">
                       Create Data Kamar Kost
                  </h1>
  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-8">
                              <form role="form">
                                  <div class="form-group"><label>Type Kost</label><input class="form-control">
                                  </div>
                                 <div class="form-group">
                                        <label>Foto Kamar</label>
                                        <input type="file">
                                    </div>
                                    <div class="col-lg-">
                                  <div class="form-group">
                                      <label>Fasilitas</label>
                                      <textarea class="form-control" rows="3"></textarea>
                                  </div>
                                  {{-- <div class="col-lg-">
                                    <div class="form-group">
                                        <label for="id_user">Fasilitas</label>
                                        <textarea class="form-control" rows="30" type="text" name="fasilitas" id="fasilitas" value="{{ $kamar->kamar }}" aria-describedby="fasilitas" placeholder="">
                                    </div> --}}
                                  <div class="form-group">
                                    <label>Harga</label>
                                    <textarea class="form-control" rows="3"></textarea>
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
@section('content')
@endsection
