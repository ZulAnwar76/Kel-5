<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // ✅ Method untuk mengirim link reset password
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customer,email',
        ]);

        $customer = Customer::where('email', $request->email)->first();

        $token = Str::random(64); // pura-pura token
        $resetUrl = url('/reset-password?token=' . $token . '&email=' . urlencode($customer->email));

        Mail::to($customer->email)->send(new ResetPasswordMail($customer->name, $resetUrl));

        return back()->with('status', 'Link reset password telah dikirim ke email.');
    }

    // ✅ Method untuk menampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // ✅ Method untuk proses login
    public function submitLogin(Request $request)
    {
        $data = $request->only('username', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.index');
            } elseif ($role === 'pegawai') {
                return redirect()->route('pegawai.index');
            } elseif ($role === 'customer') {
                return redirect()->route('customer.index');
            } else {
                Auth::logout();
                return redirect()->route('login.show')->with('error', 'Role tidak valid');
            }
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah');
        }
    }
}
