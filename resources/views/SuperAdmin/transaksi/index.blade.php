@extends('layouts-admin.ViewAdmin')
@section('transaksi')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Data Transaksi
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Transaksi</a></li>
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
                        <a class="btn btn-success" href="{{ route('transaksi.create') }}"> Create Data </a>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pengirim</th>
                                        <th>Penerima</th>
                                        <th>Jumlah Transaksi</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $tr => $data)
                                    <tr>
                                        <td>{{ $tr + $transaksi->firstitem() }}</td>
                                        <td>{{ $data->users->nama }}</td>
                                        <td>{{ $data->users->nama }}</td>
                                        <td class="center">{{ $data->jumlah_transaksi }}</td>
                                        <td class="center">{{ $data->jenis_transaksi }}</td>
                                        <td class="center">{{ $data->status_transaksi }}</td>
                                        <td>
                                            <form action="{{ route('transaksi.destroy', $data->id_transaksi) }}" method="POST">
                                                <a href="{{ route('transaksi.show', $data->id_transaksi) }}" class="btn btn-info">
                                                    <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('transaksi.edit', $data->id_transaksi) }}" class="btn btn-warning">
                                                    <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')" type="submit" class="btn btn-danger" >
                                                <i class="icon-copy fa fa-eraser" aria-hidden="true"></i>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
@endsection
