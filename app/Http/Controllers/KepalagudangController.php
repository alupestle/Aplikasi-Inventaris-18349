<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalagudangController extends Controller
{
    public function index() {
        return view('kepalagudang.kepalagudang');
    }
}
