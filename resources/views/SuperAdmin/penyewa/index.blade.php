@extends('layouts-admin.ViewAdmin')
@section('menu_penyewa', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
                  <h1 class="page-header">
                      Data Penyewa Kost
                  </h1>
                  <ol class="breadcrumb">
                <li><a href="#">Penyewa</a></li>
                <li class="active">Index</li>
              </ol>

  </div>

      <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                    <div class="panel-heading">
                       {{-- Advanced Tables --}}
                        <a class="btn btn-success" href="{{ route('penyewa.create') }}"> Create Data </a>
                        <br>
                    </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Alamat</th>
                                      <th>Kost</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="odd gradeX">
                                      <td>Trident</td>
                                      <td>Internet Explorer 4.0</td>
                                      <td>Win 95+</td>
                                      <td class="center">4</td>
                                      <td>
                                        <form action="" method="POST">
                                            <a href="" class="btn btn-info">
                                                <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
                                            </a>
                                            <a href="" class="btn btn-warning">
                                                <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')" type="submit" class="btn btn-danger" >
                                            <i class="icon-copy fa fa-eraser" aria-hidden="true"></i>
                                        </form>
                                      </td>
                                  </tr>
                                  {{-- <tr class="even gradeC">
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
                                      <td>Mozilla 1.3</td>
                                      <td>Win 95+ / OSX.1+</td>
                                      <td class="center">1.3</td>
                                      <td class="center">A</td>
                                  </tr> --}}
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
              <!--End Advanced Tables -->
          </div>
      </div>
          <!-- /. ROW  -->
                        </div>
              </div>
              <!--  end  Context Classes  -->
          </div>
      </div>
          <!-- /. ROW  -->
  </div>
@endsection
