@extends('administrator.administrator')
@section('admin')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0"><i class="fa-solid fa-pen-to-square"></i>&ensp;{{ $judul }}</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/barang">{{ $judul }}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                    
                    @foreach ($petugas as $d)
                        <form action="update" method="POST" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="id_petugas" value="{{ $d->id_petugas }}">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="username" class="col-form-label">Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $d->username }}">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $d->password }}">
                                </div>

                                <div class="mb-3">
                                     <label for="namapetugas" class="col-form-label">Nama petugas</label>
                                        <input type="text" name="nama_petugas" class="form-control" placeholder="Nama petugas" value="{{ $d->nama_petugas }}">
                                </div>
 
                                <div class="mb-3">
                                    <label for="id_level" class="col-form-label">Level</label>
                                    <select name="id_level" class="form-control" id="id_level">
                                        <option value="">--Level--</option>
                                            @foreach ($detail_level as $item)
                                            <option value="{{ $item['id_level'] }}">{{ $item['nama_level'] }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="mt-4 d-grid d-md-block">
                                    <input class="btn" style="background-color:fuchsia;" type="submit" name="submit" value="Simpan">
                                    <button class="btn btn-secondary" name="reset" type="reset">RESET</button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
