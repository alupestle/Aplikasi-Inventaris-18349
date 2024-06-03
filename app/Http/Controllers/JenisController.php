<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\facades\db;


class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Jenis";
        $data = Jenis::all();
        return view("jenis.tampil", compact('data','judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Jenis::get();
        $judul = "Jenis";
        return view("jenis.tambah",compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert([
            'nama_jenis'=> $request->nama_jenis,
            'kode_jenis'=> $request->kode_jenis,
            'keterangan'=> $request->keterangan
        ]);
        return redirect('/jenis');
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
        $judul = "Jenis";
        $data = DB::table('jenis')->where('id_jenis',$id)->get();
        return view("jenis.edit",['jenis'=> $data], compact('judul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('jenis')->where('id_jenis',$request->id_jenis)->update([
            'nama_jenis'=>$request->nama_jenis,
            'kode_jenis'=>$request->kode_jenis,
            'keterangan'=>$request->keterangan
        ]);
        return redirect('/administrator/jenis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('jenis')->where('id_jenis',$id)->delete();
        return redirect('/jenis');
    }
}
