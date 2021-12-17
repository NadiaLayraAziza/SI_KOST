@extends('layouts-admin.ViewAdmin')

@section('menu_penyewa')
    active-menu
@endsection

@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Data Penyewa Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href={{ route('penyewa.index') }}>Penyewa</a></li>
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
                        {{-- <a class="btn btn-success" href="{{ route('penyewa.create') }}"> Create Data </a>
                        <br> --}}
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kost</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penyewa as $pyw => $data)
                                    <tr>
                                        <td>{{ $pyw + $penyewa->firstitem() }}</td>
                                        <td>{{ $data->users->nama }}</td>
                                        <td>{{ $data->users->email }}</td>
                                        <td class="center">{{ $data->penyedia->nama_kost }}</td>
                                        <td>
                                            <form action="{{ route('penyewa.destroy', $data->id_penyewa) }}" method="POST">
                                                <a href="{{ route('penyewa.show', $data->id_penyewa) }}" class="btn btn-info">
                                                    <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('penyewa.edit', $data->id_penyewa) }}" class="btn btn-warning">
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
