<?php

namespace App\Http\Controllers;
use App\Models\detail;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\db;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $peminjaman = Peminjaman::with('anggota')->get();$peminjaman = DB::table('peminjamans')
    ->join('anggotas', 'peminjamans.id_anggota', '=', 'anggotas.id_anggota')
    ->select('peminjamans.*', 'anggotas.nama_anggota')
    ->get();

        return view('peminjaman.index', compact('peminjaman'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $peminjam = Anggota::all();
    $judul = "Tambah Peminjaman";
    $data = Peminjaman::all();    
    $inventaris = Inventaris::all();    
    $anggota = Anggota::all();    
    $detailInventaris = $inventaris->map(function($item){
        return[
            'id_inventaris' => $item->id_inventaris,
            'nama' => $item->nama
        ];
    });

    $detailAnggota = $anggota->map(function($item){
        return[
            'id_anggota' => $item->id_anggota,
            'nama_anggota' => $item->nama_anggota
        ];
    });

    
    return view("peminjaman.create", compact('judul', 'data', 'detailInventaris', 'detailAnggota'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idBarang = $request->input('id_inventaris');
        $jumlahDipinjam = $request->input('jumlah');
        $barang = Inventaris::find($idBarang);
        $barang->jumlah -= $jumlahDipinjam;
        $barang->save();

        
        $tanggalPinjam = now();
        $tanggalKembali = $tanggalPinjam->copy()->addWeek();

        $peminjaman = Peminjaman::create([
            'tanggal_pinjam' => $tanggalPinjam->toDateString(),
            'tanggal_kembali' => $tanggalKembali->toDateString(),
            'status_peminjaman' => "Proses Validasi",
            'id_anggota' => $request->id_anggota,
        ]);
        $request->validate([
            'id_inventaris' => 'required',
            'id_anggota' => 'required', 
        ]);
        Detail::create([
            'id_peminjaman' => $peminjaman->id_peminjaman,
            'id_inventaris' => $request->id_inventaris,
            'jumlah' =>  $request->jumlah,
        ]);
        return redirect()->back()->with('Peminjaman berhasil ditambahkan.');

    }

    public function validatepeminjaman($id_peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);
        $peminjaman->status_peminjaman = 'Divalidasi';
        $peminjaman->save();
        return redirect()->back()->with('success', 'Status peminjaman berhasil divalidasi.');
    }

    public function pengembalian()
    {
        $judul = "Pengembalian";
        $peminjaman = Peminjaman::where('status_peminjaman', 'Divalidasi')->get();        
        return view('peminjaman.pengembalian', compact('judul', 'peminjaman'));
    }

    public function pengembalianadmin($id_peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);
        $peminjaman->tanggal_kembali = now();
        $peminjaman->status_peminjaman = 'Dikembalikan';
        $peminjaman->save();
        return redirect()->back()->with('success', 'Peminjaman berhasil dikembalikan.');
    }

        /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = Peminjaman::with('detail')->findOrFail($id);
        return view('peminjaman.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
