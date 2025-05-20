<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function updateRole(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'role' => 'required|in:customer,pegawai',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Periksa apakah role berubah
        if ($user->role !== $request->input('role')) {
            // Jika role diubah dari "pegawai" ke "customer"
            if ($user->role === 'pegawai' && $request->input('role') === 'customer') {
                // Hapus data dari tabel pegawai
                $user->pegawai()->delete();

                // Tambahkan data ke tabel customer
                Customer::updateOrCreate(
                    ['user_id' => $user->user_id],
                    [
                        'name' => $user->username,
                        'email' => $user->email ?? null, // Pastikan email ada jika diperlukan
                    ]
                );
            }

            // Jika role diubah dari "customer" ke "pegawai"
            if ($user->role === 'customer' && $request->input('role') === 'pegawai') {
                // Hapus data dari tabel customer
                $user->customer()->delete();

                // Tambahkan data ke tabel pegawai
                $pegawaiExists = $user->pegawai()->exists();
                if (!$pegawaiExists) {
                    $user->pegawai()->create([
                        'name' => $user->username,
                    ]);
                }
            }

            // Perbarui role
            $user->role = $request->input('role');
            $user->save();
        }

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
