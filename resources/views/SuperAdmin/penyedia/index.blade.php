@extends('layouts-admin.ViewAdmin')

@section('penyediakost')
    active-menu
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Data Penyedia Kost
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin">Super Admin</a></li>
                <li> Penyedia Kost </li>
                <li class="active">Index</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        {{-- <div class="panel-heading">
                            <a class="btn btn-success" href="/penyedia/create"> Create Data </a>
                            <br>
                        </div> --}}
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Penyedia</th>
                                            <th>Nama Kost</th>
                                            <th>Alamat Kost</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($penyedia as $item)
                                            <tr>
                                                <td>{{ $item->id_penyedia }}</td>
                                                <td>{{ $item->users->nama }}</td>
                                                <td>{{ $item->nama_kost }}</td>
                                                <td>{{ $item->alamat_kost }}</td>
                                                <td><img src="{{ asset('storage/' . $item->foto_kost) }}" width="100px;" height="150px;" alt=""></td>
                                                <td>
                                                    <form action="{{ route('penyedia.destroy', $item->id_penyedia) }}" method="POST"">
                                                        <a class="btn btn-info" href="{{ route('penyedia.show', $item->id_penyedia) }}">
                                                            <i class="icon-copy fa fa-eye-square-o" aria-hidden="true"> Detail </i>
                                                        </a>
                                                        <a href="/penyedia/{{$item->id_penyedia}}/edit"
                                                            class="btn btn-warning">
                                                            <i class="icon-copy fa fa-pencil-square-o"
                                                                aria-hidden="true"> Edit </i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                                            type="submit" class="btn btn-danger">
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
