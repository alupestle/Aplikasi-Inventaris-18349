@extends('administrator.administrator')

@section('admin')
<div class="container">
  <h1>Form Pengembalian</h1><br>
  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
  <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Anggota</th>
              <th>Tanggal Kembali</th>
              <th>Status</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($peminjaman as $peminjaman)
              <tr>
                  <td>{{ $peminjaman->id_peminjaman }}</td>
                  <td>{{ $peminjaman->nama_anggota }}</td>
                  <td>{{ $peminjaman->tanggal_kembali }}</td>
                  <td>{{ $peminjaman->status_peminjaman }}</td>
                  <td>
                    <form action="{{ route('peminjaman.pengembalianadmin', $peminjaman->id_peminjaman) }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-primary">Kembalikan</button>
                    </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection
