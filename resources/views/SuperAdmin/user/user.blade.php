@extends('layouts-admin.ViewAdmin')
{{-- @section('menu_barang', 'active') --}}
@section('content')
<div id="page-wrapper" >
    <div class="header">
                  <h1 class="page-header">
                      Tables Page <small>Responsive tables</small>
                  </h1>
                  <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Data</li>
              </ol>

  </div>

      <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                       Advanced Tables
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>Rendering engine</th>
                                      <th>Browser</th>
                                      <th>Platform(s)</th>
                                      <th>Engine version</th>
                                      <th>CSS grade</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="odd gradeX">
                                      <td>Trident</td>
                                      <td>Internet Explorer 4.0</td>
                                      <td>Win 95+</td>
                                      <td class="center">4</td>
                                      <td class="center">X</td>
                                  </tr>
                                  <tr class="even gradeC">
                                      <td>Trident</td>
                                      <td>Internet Explorer 5.0</td>
                                      <td>Win 95+</td>
                                      <td class="center">5</td>
                                      <td class="center">C</td>
                                  </tr>
                                  <tr class="odd gradeA">
                                      <td>Trident</td>
                                      <td>Internet Explorer 5.5</td>
                                      <td>Win 95+</td>
                                      <td class="center">5.5</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="even gradeA">
                                      <td>Trident</td>
                                      <td>Internet Explorer 6</td>
                                      <td>Win 98+</td>
                                      <td class="center">6</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="odd gradeA">
                                      <td>Trident</td>
                                      <td>Internet Explorer 7</td>
                                      <td>Win XP SP2+</td>
                                      <td class="center">7</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="even gradeA">
                                      <td>Trident</td>
                                      <td>AOL browser (AOL desktop)</td>
                                      <td>Win XP</td>
                                      <td class="center">6</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Firefox 1.0</td>
                                      <td>Win 98+ / OSX.2+</td>
                                      <td class="center">1.7</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Firefox 1.5</td>
                                      <td>Win 98+ / OSX.2+</td>
                                      <td class="center">1.8</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Firefox 2.0</td>
                                      <td>Win 98+ / OSX.2+</td>
                                      <td class="center">1.8</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Firefox 3.0</td>
                                      <td>Win 2k+ / OSX.3+</td>
                                      <td class="center">1.9</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Camino 1.0</td>
                                      <td>OSX.2+</td>
                                      <td class="center">1.8</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Camino 1.5</td>
                                      <td>OSX.3+</td>
                                      <td class="center">1.8</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Netscape 7.2</td>
                                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                                      <td class="center">1.7</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Netscape Browser 8</td>
                                      <td>Win 98SE+</td>
                                      <td class="center">1.7</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Netscape Navigator 9</td>
                                      <td>Win 98+ / OSX.2+</td>
                                      <td class="center">1.8</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.0</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.1</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.1</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.2</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.2</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.3</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.3</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.4</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.4</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.5</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.5</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Gecko</td>
                                      <td>Mozilla 1.6</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.6</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Misc</td>
                                      <td>NetFront 3.1</td>
                                      <td>Embedded devices</td>
                                      <td class="center">-</td>
                                      <td class="center">C</td>
                                  </tr>
                                  <tr class="gradeA">
                                      <td>Misc</td>
                                      <td>NetFront 3.4</td>
                                      <td>Embedded devices</td>
                                      <td class="center">-</td>
                                      <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeX">
                                      <td>Misc</td>
                                      <td>Dillo 0.8</td>
                                      <td>Embedded devices</td>
                                      <td class="center">-</td>
                                      <td class="center">X</td>
                                  </tr>
                                  <tr class="gradeX">
                                      <td>Misc</td>
                                      <td>Links</td>
                                      <td>Text only</td>
                                      <td class="center">-</td>
                                      <td class="center">X</td>
                                  </tr>
                                  <tr class="gradeX">
                                      <td>Misc</td>
                                      <td>Lynx</td>
                                      <td>Text only</td>
                                      <td class="center">-</td>
                                      <td class="center">X</td>
                                  </tr>
                                  <tr class="gradeC">
                                      <td>Misc</td>
                                      <td>IE Mobile</td>
                                      <td>Windows Mobile 6</td>
                                      <td class="center">-</td>
                                      <td class="center">C</td>
                                  </tr>
                                  <tr class="gradeC">
                                      <td>Misc</td>
                                      <td>PSP browser</td>
                                      <td>PSP</td>
                                      <td class="center">-</td>
                                      <td class="center">C</td>
                                  </tr>
                                  <tr class="gradeU">
                                      <td>Other browsers</td>
                                      <td>All others</td>
                                      <td>-</td>
                                      <td class="center">-</td>
                                      <td class="center">U</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
              <!--End Advanced Tables -->
          </div>
      </div>
          <!-- /. ROW  -->
      <div class="row">
          <div class="col-md-6">
            <!--   Kitchen Sink -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Kitchen Sink
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
               <!-- End  Kitchen Sink -->
          </div>
          <div class="col-md-6">
               <!--   Basic Table  -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Basic Table
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
                <!-- End  Basic Table  -->
          </div>
      </div>
          <!-- /. ROW  -->
      <div class="row">
          <div class="col-md-6">
                <!--    Striped Rows Table  -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Striped Rows Table
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--  End  Striped Rows Table  -->
          </div>
          <div class="col-md-6">
              <!--    Bordered Table  -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Bordered Table
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                      <div class="table-responsive table-bordered">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
               <!--  End  Bordered Table  -->
          </div>
      </div>
          <!-- /. ROW  -->
      <div class="row">
          <div class="col-md-6">
               <!--    Hover Rows  -->
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Hover Rows
                  </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!-- End  Hover Rows  -->
          </div>
          <div class="col-md-6">
               <!--    Context Classes  -->
              <div class="panel panel-default">

                  <div class="panel-heading">
                      Context Classes
                  </div>

                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Username</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="success">
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                  </tr>
                                  <tr class="info">
                                      <td>2</td>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>@fat</td>
                                  </tr>
                                  <tr class="warning">
                                      <td>3</td>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>@twitter</td>
                                  </tr>
                                  <tr class="danger">
                                      <td>4</td>
                                      <td>John</td>
                                      <td>Smith</td>
                                      <td>@jsmith</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--  end  Context Classes  -->
          </div>
      </div>
          <!-- /. ROW  -->
  </div>
@endsection
