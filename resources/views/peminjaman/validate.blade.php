@extends('administrator.administrator')

@section('admin')
<div class="container">
    <h1>Validasi Peminjaman</h1>
    <form action="{{ route('peminjaman.updateStatus') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="status_peminjaman">Status Peminjaman</label>
            <select class="form-control" id="status_peminjaman" name="status_peminjaman">
                <option value="accepted">Setuju</option>
                <option value="rejected">Tolak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Status</button>
    </form>
</div>
@endsection
