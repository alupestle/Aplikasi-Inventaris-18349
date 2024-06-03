<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index() {
        $isi = "Selamat Datang Administrator";
        return view('administrator.administrator',["isi" => $isi]);
        }
}
