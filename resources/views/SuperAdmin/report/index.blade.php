@extends('layouts-admin.ViewAdmin')

@section('report')
    active-menu
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Data Report
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin">Super Admin</a></li>
                <li> Report </li>
                <li class="active">Index</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Report</th>
                                            <th>Nama</th>
                                            <th>Tanggal Report</th>
                                            <th>Keluhan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($report as $item)
                                            <tr>
                                                <td>{{ $item->id_report }}</td>
                                                <td>{{ $item->users->nama }}</td>
                                                <td>{{ $item->tanggal_report }}</td>
                                                <td>{{ $item->keluhan }}</td>
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
