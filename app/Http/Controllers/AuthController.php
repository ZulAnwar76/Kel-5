<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    

    function showLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
    // Ambil input username dan password
    $data = $request->only('username', 'password');

    // Periksa kredensial login
    if (Auth::attempt($data)) {
        $request->session()->regenerate();

        // Ambil role pengguna
        $role = Auth::user()->role;

        // Redirect berdasarkan role
        if ($role === 'admin') {
            return redirect()->route('admin.index'); // Halaman admin
        } elseif ($role === 'pegawai') {
            return redirect()->route('pegawai.index'); // Halaman pegawai
        } elseif ($role === 'customer') {
            return redirect()->route('customer.index'); // Halaman customer
        } else {
            // Jika role tidak valid
            Auth::logout();
            return redirect()->route('login.show')->with('error', 'Role tidak valid');
        }
    } else {
        // Jika login gagal
        return redirect()->back()->with('error', 'Username atau Password salah');
    }
}
}
