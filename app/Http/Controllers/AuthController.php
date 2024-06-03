<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // Regenerate session login
            $request->session()->regenerate();
        
            $user = auth()->user();
        
            // Check user role based on role_id or a dedicated "role" column
            if ($user->role_id === 1 || $user->role === 'kepala_gudang') {
                // User is administrator or kepala gudang
                return redirect()->intended('/administrator'); // Or '/kepala_gudang' if separate dashboards exist
            } else {
                // User is operator or other role
                return redirect()->intended('/operator');
            }
        }       

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'email atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
