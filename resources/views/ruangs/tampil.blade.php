@extends('administrator.administrator')
@section('admin')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col-sm-6">
          <h2 class="m-3">{{ $judul }}</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right" style="background-color: whitesmoke">
            <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
            <li class="breadcrumb-item active">Ruang</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
   <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
             <div class="card">
                <div class="card-header">
                    <a href="createruang" class="btn btn-primary" style="float: right"><i class="fa-solid fa-user-plus fa-2x"></i></a>
                  </div>
                 <div class="card-body">
                   
                   <table id="example2" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                      <th>No</th>
                      <th>Nama Ruang</th>
                      <th>Kode Ruang</th>
                      <th>Keterangan</th>
                     </tr>
                     </thead>
                     <tbody>
                       
                       @foreach ($data as $d)
                    <tr>
                       <th>{{ $loop->iteration  }}</th>
     
                       <th>{{ $d->nama_ruang }}</th>
     
                       <th>{{ $d->kode_ruang }}</th>
     
                       <th>{{ $d->keterangan }}</th>

                       <th>
                         <a href="/editruang{{ $d->id_ruang }}" class="btn btn-warning">Edit</a>
                         <a href="/hapusruang{{ $d->id_ruang }}" class="btn btn-danger">Hapus</a>
                       </th>
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
  @endsection