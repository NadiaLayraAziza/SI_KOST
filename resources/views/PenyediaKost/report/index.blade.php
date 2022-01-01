@extends('layouts-admin.ViewAdmin')
@section('menu_report_penyedia')
    active-menu
@endsection
@section('content')
<div id="page-wrapper">
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
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                       {{-- Advanced Tables --}}
                       <div class="col-md-40 col-sm-12 text-right">
                        <a class="btn btn-success" href="{{ route('Report.create') }}"> Create Data </a>
                    </div>
                    <br>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keluhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($report as $re => $data)
                                    <tr>
                                        <td>
                                            <span>{{ $data->tanggal_report }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $data->keluhan }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">Report Semua User
                       {{-- Advanced Tables --}}
                       <div class="col-md-40 col-sm-12 text-right"><br>

                        {{-- <a class="btn btn-success" href="{{ route('Report.create') }}"> Create Data </a> --}}
                    </div>
                    <br>
                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keluhan</th>
                                        <th>Created By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penyewa as $pe => $item)
                                    <tr>
                                        <td>
                                            <span>{{ $item->tanggal_report }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $item->keluhan }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $item->users->role }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
