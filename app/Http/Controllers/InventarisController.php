<?php

namespace App\Http\Controllers;
use App\Models\Inventaris;
use App\Models\User;
use App\Models\Role;
use App\Models\Jenis;
use App\Models\Ruang;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $judul = "Data Barang";

    // Join tabel inventaris with ruang, jenis, and petugas
    $data = Inventaris::all();

    return view("inventaris.tampil", compact('data', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function buat()
{
    $judul = "Tambah";
    $data = Inventaris::all();    
    $jenis = Jenis::all();    
    $ruang = Ruang::all();    
    $user = User::all();    
    $detailJenis = $jenis->map(function($item){
        return[
            'id_jenis' => $item->id_jenis,
            'nama_jenis' => $item->nama_jenis
        ];
    });

    $detailRuang = $ruang->map(function($item){
        return[
            'id_ruang' => $item->id_ruang,
            'nama_ruang' => $item->nama_ruang
        ];
    });

    $levelPetugas3 = $user->filter(function($item){
            return $item->role_id === 3;
    });

    $detailPetugas3 = $levelPetugas3->map(function($item){
        return[
            'id' => $item->id,
            'name' => $item->name
        ];
    });

    return view("inventaris.tambah", compact('judul', 'data', 'detailJenis', 'detailRuang', 'detailPetugas3'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('inventaris')->insert([
            'nama' => $request->nama,
            'kondisi' => $request->kondisi,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'id_jenis' => $request->id_jenis,
            'tanggal_register' => $request->tanggal_register,
            'id_ruang' => $request->id_ruang,
            'kode_inventaris' => $request->kode_inventaris,
            'name' => $request->name,
        ]);
        return redirect('/inventaris');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
