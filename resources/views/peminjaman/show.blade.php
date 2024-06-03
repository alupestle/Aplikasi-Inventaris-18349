@extends('administrator.administrator')

@section('admin')
<div class="container">
    <h1>Detail Resi Peminjaman</h1>
    <p><strong>ID Peminjaman:</strong> {{ $peminjaman->id_peminjaman }}</p>
    <p><strong>ID Peminjam:</strong> {{ $peminjaman->id_anggota }}</p>
    <p><strong>Tanggal Pinjam:</strong> {{ $peminjaman->tanggal_pinjam }}</p>
    <p><strong>Tanggal Kembali:</strong> {{ $peminjaman->tanggal_kembali }}</p>
    <p><strong>Status Peminjaman:</strong> {{ $peminjaman->status_peminjaman }}</p>

    <h2>Detail Pinjam</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID Detail Pinjam</th>
                <th>ID Inventaris</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjaman->detailPinjam as $detail)
            <tr>
                <td>{{ $detail->id_detail_pinjam }}</td>
                <td>{{ $detail->id_inventaris }}</td>
                <td>{{ $detail->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Update Status</h2>
    <form action="{{ route('peminjaman.updateStatus', $peminjaman->id_peminjaman) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="status_peminjaman">Status Peminjaman</label>
            <select class="form-control" id="status_peminjaman" name="status_peminjaman" required>
                <option value="pending" {{ $peminjaman->status_peminjaman == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ $peminjaman->status_peminjaman == 'approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ $peminjaman->status_peminjaman == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
