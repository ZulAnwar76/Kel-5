<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail; // ✅ Tambahkan ini
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function showRegistration() {
        return view('register');
    }

    function submitRegistration(Request $request) {

        if (User::where('username', $request->username)->exists()) {
            return back()->with('error', 'Username already exists.');
        }

        if (Customer::where('email', $request->email)->exists()) {
            return back()->with('error', 'Email already exists.');
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role = 'customer';
        $user->save();

        $customer = new Customer();
        $customer->user_id = $user->user_id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address ?? null;
        $customer->phone = $request->phone ?? null;
        $customer->save();

        
        Mail::to($customer->email)->send(new VerifyEmail($customer->name));

        return redirect()->route('login.show');
    }
}
