<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request; // <-- ini penting!
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordMail;

class AuthController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
        ]);

        $customer = Customer::where('email', $request->email)->first();

        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $customer->email],
            ['token' => $token, 'created_at' => now()]
        );

        $resetUrl = url('/reset-password?token=' . $token . '&email=' . urlencode($customer->email));

        Mail::to($customer->email)->send(new ResetPasswordMail($customer->name, $resetUrl));

        return back()->with('status', 'Link reset password telah dikirim ke email.');
    }
}
