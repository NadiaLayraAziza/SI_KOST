@extends('layouts-admin.ViewAdmin')
@section('menu_home', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Edit Peraturan Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Peraturan</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
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
                            <form method="POST" action="{{ route('peraturan.update', $peraturan->id_peraturan) }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-12">
                                    <div class="form-group" type="hidden">
                                        <label for="id_peraturan">ID Peraturan</label>
                                        <input class="form-control" type="text" name="id_peraturan" id="id_peraturan" value="{{ $peraturan->id_peraturan }}" aria-describedby="id_peraturan" placeholder="">
                                    </div>
                                    <div class="form-group" type="hidden">
                                        <label for="id_penyedia">Penyedia</label>
                                        <input class="form-control" type="text" name="id_penyedia" id="id_penyedia" value="{{ $peraturan->id_penyedia }}" aria-describedby="id_penyedia" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Peraturan</label>
                                        <textarea class="form-control" rows="30" type="text" name="peraturan" id="peraturan" value="{{ $peraturan->peraturan }}" aria-describedby="peraturan" placeholder="">
                                    </div>
                                    <button type="submit" class="btn btn-info">Submit Button</button>
                                    <button type="reset" class="btn btn-danger">Reset Button</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
