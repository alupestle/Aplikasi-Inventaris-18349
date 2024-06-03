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
                    
                    @foreach ($jenis as $d)
                        <form action="update" method="POST" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="id_jenis" value="{{ $d->id_jenis }}">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="nama_jenis" class="col-form-label">Nama Jenis</label>
                                        <input type="text" name="nama_jenis" class="form-control" placeholder="Nama jenis" value="{{ $d->nama_jenis }}">
                                </div>

                                <div class="mb-3">
                                    <label for="kode_jenis" class="col-form-label">Kode Jenis</label>
                                        <input type="text" name="kode_jenis" class="form-control" placeholder="Kode jenis" value="{{ $d->kode_jenis }}">
                                </div>

                                <div class="mb-3">
                                    <label for="keterangan" class="col-form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $d->keterangan }}">
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
