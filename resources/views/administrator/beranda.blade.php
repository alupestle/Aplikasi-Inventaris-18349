@extends('administrator.administrator')
@section('admin')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-sm-6">
          <h1 class="m-4">{{ $isi }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right" style="background-color: whitesmoke">
            <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
            <li class="breadcrumb-item active">Petugas</li>
          </ol>
        </div>
    </div>
  </div>
  <!-- /.content-header -->

@endsection