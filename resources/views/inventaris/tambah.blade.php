@extends('administrator.administrator')
@section('admin')

<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h3 class="m-2"><i class="fa-solid fa-circle-info"></i>&ensp;{{ $judul }}</h3>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/beranda">{{ $judul }}</a></li>
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
            <form action="storeinventaris" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-body">

                  <div class="mb-3">
                      <label for="nama" class="col-form-label">Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>

                  <div class="mb-3">
                      <label for="kondisi" class="col-form-label">Kondisi</label>
                          <input type="text" name="kondisi" class="form-control" placeholder="Kondisi">
                  </div>

                  <div class="mb-3">
                      <label for="keterangan" class="col-form-label">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                  </div>

                  <div class="mb-3">
                      <label for="jumlah" class="col-form-label">Jumlah</label>
                          <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                  </div>

                  <div class="mb-3">
                    <label class="col-form-label">Jenis</label>
                    <select name="id_jenis" class="form-control" id="">
                        <option value="">--Jenis--</option>
                        @foreach ($detailJenis as $item)
                        <option value="{{ $item['id_jenis'] }}">{{ $item['nama_jenis'] }}</option>
                        @endforeach
                    </select>
                </div>

                  <div class="mb-3">
                      <label for="tanggal_registrasi" class="col-form-label">Tanggal register</label>
                          <input type="date" name="tanggal_register" class="form-control" placeholder="Tanggal reg">
                  </div>

                  <div class="mb-3">
                        <label class="col-form-label">Ruang</label>
                        <select name="id_ruang" class="form-control" id="">
                            <option value="">--Ruang--</option>
                            @foreach ($detailRuang as $item)
                            <option value="{{ $item['id_ruang'] }}">{{ $item['nama_ruang'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="kode_inventaris" class="col-form-label">Kode inventaris</label>
                            <input type="text" name="kode_inventaris" class="form-control" placeholder="Kode inventaris">
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label">Petugas</label>
                        <select name="id" class="form-control" id="">
                            <option value="">--Petugas--</option>
                            @foreach ($detailPetugas3 as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
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