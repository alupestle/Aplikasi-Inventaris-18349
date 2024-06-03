<?php

namespace App\Http\Controllers;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\facades\db;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Ruang";
        $data = Ruang::all();
        return view("ruangs.tampil", compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Ruang::get();
        $judul = "Ruang";
        return view("ruangs.tambah",compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('ruangs')->insert([
            'nama_ruang'=> $request->nama_ruang,
            'kode_ruang'=> $request->kode_ruang,
            'keterangan'=> $request->keterangan
        ]);
        return redirect('/ruangs');
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
        $judul = "Ruang";
        $data = DB::table('ruangs')->where('id_ruang',$id)->get();
        return view("ruangs.edit",['ruang'=> $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('ruangs')->where('id_ruang',$request->id_ruang)->update([
            'nama_ruang'=>$request->nama_ruang,
            'kode_ruang'=>$request->kode_ruang,
            'keterangan'=>$request->keterangan
        ]);
        return redirect('/ruangs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('ruangs')->where('id_ruang',$id)->delete();
        return redirect('/ruangs');
    }
}
