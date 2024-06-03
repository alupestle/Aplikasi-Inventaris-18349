<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = "Data Petugas";
        $data = User::with('role')->get();$data = DB::table('users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->select('users.*', 'roles.role_name')
        ->get();
        return view("petugas.tampil", compact('data', 'judul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judul = "Petugas";
        $level = Role::all();
        $data = $level->map(function($item){
            return[
                'id' => $item->id,
                'role_name' => $item->role_name
            ];
        });
        return view("petugas.tambah", compact('judul', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        return redirect('/petugas');
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
        $judul = "Petugas";
        $data = DB::table('petugas')->where('id',$id)->get();
        $level = Role::all();
        $detail_level = $level->map(function($item){
            return[
                'id' => $item->id,
                'role_name' => $item->nama_level
            ];
        });
        return view("petugas.edit",['users'=> $data], compact('judul', 'detail_level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'role_id' => $request->role_id,
        ]);
        return redirect('/petugas');
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/petugas');
    }
}
