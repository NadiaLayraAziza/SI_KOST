@extends('layouts-admin.ViewAdmin')
@section('menu_report_penyedia', 'active')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Create Report Penyedia Kost
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Report</a></li>
                <li class="active">Create</li>
            </ol>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-lg-20">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Report
                        </div>
                    </div>
                    <form method="post" action="{{ route('Report.store') }}" id="myForm">
                        @csrf
                        <div class="form-group row">
                            <label for="keluhan" class="col-sm-12 col-md-2 col-form-label text-white">Keluhan</label>
                            <div class="col-sm-12 col-md-8">
                                <textarea class="form-control" rows="10" type="text" name="keluhan" id="keluhan" aria-describedby="keluhan"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <footer>
            <p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
        </footer>
    <!-- /.col-lg-12 -->
    </div>
@endsection
