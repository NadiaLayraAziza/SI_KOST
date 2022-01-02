@extends('layouts-admin.ViewAdmin')
@section('penyediakost')
    active-menu
@endsection
@section('content')
<div id="page-wrapper" >
    <div class="header">
        <h1 class="page-header">
            Detail Data Penyedia Kost
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Penyedia</a></li>
            <li class="active">Detail</li>
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
                            <form method="POST" action="{{ route('penyedia.update', $penyedia->id_penyedia) }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="id_user">Nama Lengkap</label>
                                        <input class="form-control" type="text" name="nama" id="id_user" value="{{ $penyedia->users->nama }}" aria-describedby="id_user" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Alamat Sesuai KTP</label>
                                        <input class="form-control" type="text" name="alamat" id="id_user" value="{{ $penyedia->users->alamat }}" aria-describedby="id_user" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">Email</label>
                                        <input class="form-control" type="email" name="email" id="id_user" value="{{ $penyedia->users->email }}" aria-describedby="id_user" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_user">No Telepon</label>
                                        <input class="form-control" type="text" name="no_hp" id="id_user" value="{{ $penyedia->users->no_hp }}" aria-describedby="id_user" readonly>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nama_kost">Nama Kost</label>
                                        <input class="form-control" type="text" name="nama_kost" id="nama_kost" value="{{ $penyedia->nama_kost }}" aria-describedby="nama_kost" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_kost">Alamat Kost</label>
                                        <input class="form-control" type="text" name="alamat_kost" id="alamat_kost" value="{{ $penyedia->alamat_kost }}" aria-describedby="alamat_kost" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_kost">Foto Kost</label>
                                        <img width="200" @if($penyedia->foto_kost) src="{{ asset($penyedia->foto_kost) }}" @endif />
                                        {{-- <input class="uploads form-control" type="file" name="foto_kost" id="foto_kost" > --}}
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-12">
                                    <a class="btn btn-info" href="{{ route('penyedia.edit', $penyedia->id_penyedia) }}">Edit Button</a>
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

        <!-- row 2 -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto Kamar</th>
                                            <th>Tipe Kamar</th>
                                            <th>Jumlah</th>
                                            <th>Fasilitas</th>
                                            <th>Harga</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kamar as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img width="150px" @if($item->Foto_Kamar) src="{{ asset($item->Foto_Kamar) }}" @endif />
                                                </td>
                                                <td>{{ $item->tipe_kamar }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                {{-- <td>
                                                    <form action="{{ route('kamar.destroy', $item->id_kamar) }}" method="POST">
                                                        <a class="btn btn-warning" href="{{ route('kamar.edit', $item->id_kamar) }}">
                                                            <i class="icon-copy fa fa-pencil-square-o" aria-hidden="true"> Edit </i>
                                                        </a>
                                                        <a class="btn btn-info" href="{{ route('kamar.show', $item->id_kamar) }}">
                                                            <i class="icon-copy fa fa-eye-square-o" aria-hidden="true"> Detail </i>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="btn btn-danger" onclick="return confirm('Anda yakin ingin meghapus data ini ?')" type="submit">
                                                            <i class="icon-copy fa fa-eraser" aria-hidden="true"> Delete </i>
                                                    </form>
                                                </td> --}}
                                                <td>
                                                    <textarea class="form-control" rows="{{ $jum_baris }}" type="fasilitas" name="fasilitas" id="fasilitas" aria-describedby="fasilitas" disabled>{{ $item->fasilitas }}</textarea>
                                                </td>
                                                <td>
                                                    Tahunan : {{ $item->Harga_Tahunan }}<br>
                                                    Bulanan : {{ $item->Harga_bulanan }}<br>
                                                    Mingguan : {{ $item->Harga_mingguan }}<br>
                                                    Harian : {{ $item->Harga_harian }}<br>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@endsection
