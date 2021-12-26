@extends('layouts-admin.ViewAdmin')

@section('kamar')
    active-menu
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Data Tipe Kamar
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Tipe Kamar</a></li>
                <li class="active">Index</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-success" href="{{ route('kamar.create') }}"> Create Data </a>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kos</th>
                                            <th>Tipe Kamar</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kamar as $item)
                                            <tr>
                                                <td>{{ $item->id_kamar }}</td>
                                                <td>{{ $item->penyedia->nama_kost }}</td>
                                                <td>{{ $item->tipe_kamar }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>
                                                    {{-- <form action="#"> --}}
                                                    <form action="{{ route('kamar.destroy', $item->id_kamar) }}" method="POST">
                                                        <a class="btn btn-warning" href="{{ route('kamar.edit', $item->id_kamar) }}">
                                                            <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"> Edit </i>
                                                        </a>
                                                        <a class="btn btn-info" href="{{ route('kamar.show', $item->id_kamar) }}">
                                                            <i class="icon-copy fa fa-eye-square-o" aria-hidden="true"> Detail </i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="btn btn-danger" onclick="return confirm('Anda yakin ingin meghapus data ini ?')" type="submit">
                                                            <i class="icon-copy fa fa-eraser" aria-hidden="true"> Delete </i>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
