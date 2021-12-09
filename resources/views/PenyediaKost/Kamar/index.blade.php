@extends('layouts-admin.ViewAdmin')
@section('menu_kamar', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
                  <h1 class="page-header">
                      Data Kamar
                  </h1>

  </div>
      <div id="page-inner">

      <div class="row">
          <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                    <div class="panel-heading">
                       {{-- Advanced Tables --}}
                        <a class="btn btn-success" href="{{ route('kamar.create') }}"> Create Data </a>
                        <br>
                    </div>
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                  <tr>
                                      <th>Foto Kamar</th>
                                      <th>Tipe Kamar</th>
                                      <th>Fasilitas</th>
                                      <th>Harga</th>
                                      {{-- <th>Action</th> --}}
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr class="odd gradeX">
                                      <td>Trident</td>
                                      <td>Internet Explorer 4.0</td>
                                      <td>Win 95+</td>
                                      <td class="center">4</td>
                                      <td>
                                      </td>
                                  </tr>
                                  {{-- @foreach ($kamar as $k => $data)
                                    <tr>
                                        <td>{{ $k + $kamar->firstitem() }}</td>
                                        <td>{{ $data->users->nama }}</td>
                                        <td>{{ $data->users->nama }}</td>
                                        <td class="center">{{ $data->foto_kamar }}</td>
                                        <td class="center">{{ $data->type_kamar }}</td>
                                        <td class="center">{{ $data->fasilitas }}</td>
                                        <td class="center">{{ $data->harga}}</td>
                                        <td>
                                            <form action="{{ route('kamar.destroy', $data->id_kamar) }}" method="POST">
                                                <a href="{{ route(kamar.show', $data->id_kamar) }}" class="btn btn-info">
                                                    <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('kamar.edit', $data->id_kamar) }}" class="btn btn-warning">
                                                    <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a> --}}
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
