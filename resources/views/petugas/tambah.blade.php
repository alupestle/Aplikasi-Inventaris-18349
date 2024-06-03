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
            <form action="storepetugas" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="card-body">
                  <div class="mb-3">
                      <label for="name" class="col-form-label">name</label>
                          <input type="text" name="name" class="form-control" placeholder="name">
                  </div>

                  <div class="mb-3">
                      <label for="email" class="col-form-label">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="email">
                  </div>

                  <div class="mb-3">
                      <label for="password" class="col-form-label">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="password">
                  </div>

                  <div class="mb-3">
                        <label class="col-form-label">Level</label>
                        <select name="role_id" class="form-control" id="">
                            <option value="">--Level--</option>
                            @foreach ($data as $item)
                            <option value="{{ $item['id'] }}">{{ $item['role_name'] }}</option>
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