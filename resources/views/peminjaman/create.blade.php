@extends('administrator.administrator')

@section('admin')
<div class="container">
    <h1>Tambah Peminjaman</h1>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_anggota">Peminjam</label>
            <select name="id_anggota" class="form-control" id="">
                <option value="">--Nama Anggota--</option>
                @foreach ($detailAnggota as $item)
                <option value="{{ $item['id_anggota'] }}">{{ $item['nama_anggota'] }}</option>
                @endforeach
            </select>        
        </div>
        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    placeholder: "--Nama Anggota--",
                    allowClear: true
                });
            });
        </script>
        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
        </div>
        <div id="detail-pinjam-container">
            <div class="form-group">
                <label for="detail_pinjam">Detail Peminjaman</label>
                    <select name="id_inventaris" class="form-control" id="">
                        <option value="">--Nama Inventaris--</option>
                        @foreach ($detailInventaris as $item)
                        <option value="{{ $item['id_inventaris'] }}">{{ $item['nama'] }}</option>
                        @endforeach
                    </select>
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" required>
                </div>
            </div>
        </div>
        <button type="button" onclick="addDetail()">Tambah Detail</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
function addDetail() {
    var container = document.getElementById('detail-pinjam-container');
    var index = container.children.length;
    var detailPinjamForm = `
        <div class="form-group">
            <input type="text" class="form-control" name="detail_pinjam[${index}][id_inventaris]" placeholder="ID Inventaris" required>
            <input type="number" class="form-control" name="detail_pinjam[${index}][jumlah]" placeholder="Jumlah" required>
        </div>`;
    container.insertAdjacentHTML('beforeend', detailPinjamForm);
}
</script>
@endsection
