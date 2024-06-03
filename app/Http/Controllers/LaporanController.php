<?php

namespace App\Http\Controllers;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\db;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function laporan()
    { 
        $judul = "Laporan Peminjaman";
        $peminjaman = Peminjaman::with('anggota')->get();$peminjaman = DB::table('peminjamans')
        ->join('anggotas', 'peminjamans.id_anggota', '=', 'anggotas.id_anggota')
        ->select('peminjamans.*', 'anggotas.nama_anggota')
        ->latest()
        ->get();           
        return view('laporan.tampil',  compact('judul', 'peminjaman'));
    }

    public function datalaporan()
    { 
        $judul = "Laporan Peminjaman";
        $peminjaman = Peminjaman::with('anggota')->get();$peminjaman = DB::table('peminjamans')
        ->join('anggotas', 'peminjamans.id_anggota', '=', 'anggotas.id_anggota')
        ->select('peminjamans.*', 'anggotas.nama_anggota')
        ->latest()
        ->get();             
        return view('laporan.datalaporan',  compact('judul', 'peminjaman'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
