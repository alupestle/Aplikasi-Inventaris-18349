<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Support\facades\db;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Anggota";
        $data = Anggota::all();
        return view("anggota.tampil", compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Anggota::get();
        $judul = "Anggota";
        return view("anggota.tambah",compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('anggotas')->insert([
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'no_anggota' => $request->no_anggota,
            'alamat' => $request->alamat
        ]);
        return redirect('/anggota');
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
