@extends('layouts-admin.ViewAdmin')
@section('home_penyedia')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Selamat Datang {{Auth::user()->nama}}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Dashboard</a></li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->

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
