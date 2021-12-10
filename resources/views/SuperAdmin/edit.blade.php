@extends('layouts-admin.ViewAdmin')

@section('superadmin')
    active-menu
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Edit Super Admin
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin">Super Admin</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Edit Super Admin</h3><br><br>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="post" action="/admin/{{ $admin->id }}" id="myForm"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                aria-describedby="email" value="{{$admin->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="nama" name="nama" class="form-control" id="nama"
                                                aria-describedby="nama" value="{{$admin->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No Handphone</label>
                                            <input type="no_hp" name="no_hp" class="form-control" id="no_hp"
                                                aria-describedby="no_hp" value="{{$admin->no_hp}}">
                                        </div>
                                        <label for="alamat">Alamat </label>
                                        <input type="alamat" class="form-control" name="alamat" value="{{$admin->alamat}}"><br>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
