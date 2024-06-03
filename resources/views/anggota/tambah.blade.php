@extends('administrator.administrator')
@section('admin')

<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h3 class="m-2"><i class="fa-solid fa-address-book"></i>&ensp;{{ $judul }}</h3>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/barang">{{ $judul }}</a></li>
           <li class="breadcrumb-item active">Tambah</li>
         </ol>
       </div>
     </div>
   </div>
 </div>

 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-8">
        <div class="card">
              <table id="example1" class="table table-bordered table-striped">
            <form action="storeanggota" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-body">
                  <div class="mb-3">
                      <label for="id_anggota" class="col-form-label">Id</label>
                          <input type="number" name="id_anggota" class="form-control" placeholder="id anggota">
                  </div>

                  <div class="mb-3">
                      <label for="nama_anggota" class="col-form-label">Nama anggota</label>
                          <input type="text" name="nama_anggota" class="form-control" placeholder="nama anggota">
                  </div>

                  <div class="mb-3">
                      <label for="no_anggota" class="col-form-label">Nomor</label>
                          <input type="number" name="no_anggota" class="form-control" placeholder="nomor anggota">
                  </div>

                  <div class="mb-3">
                      <label for="alamat" class="col-form-label">Alamat</label>
                          <input type="text" name="alamat" class="form-control" placeholder="alamat">
                  </div>

                  <div class="mt-4 d-grid d-md-block">
                      <input class="btn" style="background-color:fuchsia;" type="submit" name="submit" value="Simpan">
                      <button class="btn btn-secondary" name="reset" type="reset">RESET</button>
                  </div>
              </div>
          </form>
            </table>
        </div>
    </div>
    </div>
   </div>
 </div>
@endsection