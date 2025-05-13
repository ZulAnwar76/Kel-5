<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserlistController extends Controller
{

    public function index()
    {
    $users = User::whereIn('role', ['pegawai', 'customer'])->get();
    return view('admin.userlist', compact('users'));
    }

}
