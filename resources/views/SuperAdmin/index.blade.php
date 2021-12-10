@extends('layouts-admin.ViewAdmin')

@section('superadmin')
    active-menu
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Data Super Admin
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin">Super Admin</a></li>
                <li class="active">Index</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-success" href="/admin/create"> Create Data </a>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->no_hp }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <form action="#">
                                                        <a href="#"
                                                            class="btn btn-warning">
                                                            <i class="icon-copy fa fa-pencil-square-o"
                                                                aria-hidden="true">Edit</i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                                            type="submit" class="btn btn-danger">
                                                            <i class="icon-copy fa fa-eraser" aria-hidden="true">Delete</i>
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
