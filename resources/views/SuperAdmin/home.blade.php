@extends('layouts-admin.ViewAdmin')
{{-- @section('menu_barang', 'active') --}}
@section('beranda')
    active-menu
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                {{Auth::user()->nama}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Dashboard</a></li>
            </ol>
        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-users fa-5x"></i>

                        </div>
                        <div class="panel-right">
                            <h3>{{($SuperAdmin->where('role', 'Super Admin')->count())}}</h3>
                            <strong> Super Admin </strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-home fa-5x"></i>
                        </div>

                        <div class="panel-right">
                            <h3>{{$penyedia->count()}}</h3>
                            <strong> Penyedia Kost </strong>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3>{{$penyewa->count()}}</h3>
                            <strong> Penyewa Kost </strong>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-credit-card fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3>{{$transaksi->count()}}</h3>
                            <strong> Transaksi </strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa fa-comments fa-5x"></i>

                        </div>
                        <div class="panel-right">
                            <h3>{{$report->count()}}</h3>
                            <strong> Report </strong>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
        @include('layouts-admin.footer')
    </div>
@endsection
