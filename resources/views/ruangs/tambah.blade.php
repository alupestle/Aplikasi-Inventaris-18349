@extends('administrator.administrator')
@section('admin')

<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h3 class="m-2"><i class="fa-solid fa-font"></i>&ensp;{{ $judul }}</h3>
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
            <form action="storeruang" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-body">
                  <div class="mb-3">
                      <label for="nama_ruang" class="col-form-label">Nama Ruang</label>
                          <input type="text" name="nama_ruang" class="form-control" placeholder="Nama ruang">
                  </div>

                  <div class="mb-3">
                      <label for="kode_ruang" class="col-form-label">Kode Ruang</label>
                            <input type="text" name="kode_ruang" class="form-control" placeholder="Kode ruang">
                  </div>

                  <div class="mb-3">
                      <label for="keterangan" class="col-form-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
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