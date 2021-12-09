@extends('layouts-admin.ViewAdmin')
@section('menu_report_penyedia', 'active')
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Halaman Report
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Report</a></li>
            <li class="active">Index</li>
        </ol>
    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        History Report
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
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