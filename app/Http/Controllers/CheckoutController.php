<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login.show');
        }

        // Get customer ID from authenticated user
        $customer = Customer::where('user_id', Auth::user()->user_id)->first();

        if (!$customer) {
            return redirect()->route('shop')->with('error', 'Customer profile not found');
        }

        // Get cart items with their associated products
        $cartItems = Cart::where('customer_id', $customer->customer_id)
            ->with('product')
            ->get();

        // Calculate total
        $total = $cartItems->sum(function ($item) {
            return $item->product->price;
        });

        return view('checkout', [
            'cartItems' => $cartItems,
            'total' => $total,
            'customer' => $customer
        ]);
    }

    public function process(Request $request)
    {
        $request->validate([
            'c_address' => 'required',
            'c_phone' => 'required',
            'payment_proof' => 'required|image|max:2048'
        ]);

        // Update customer details
        $customer = Customer::where('user_id', Auth::user()->user_id)->first();
        $customer->address = $request->c_address;
        $customer->phone = $request->c_phone;
        $customer->save();

        // Handle file upload
        $imagePath = $request->file('payment_proof')->store('payment_proofs', 'public');

        // Get cart items
        $cartItems = Cart::where('customer_id', $customer->customer_id)
            ->with('product')
            ->get();

        // Create transactions for each cart item
        foreach ($cartItems as $cartItem) {
            Transaction::create([
                'customer_id' => $customer->customer_id,
                'product_id' => $cartItem->product_id,
                'payment_proof' => $imagePath,
                'status' => 'pending',
                'total_price' => $cartItem->product->price
            ]);
        }

        // Clear the cart
        Cart::where('customer_id', $customer->customer_id)->delete();

        return redirect()->route('thankyou.index')->with('success', 'Order placed successfully!');
    }
    
    public function showTransactions()
    {

        $transactions = Transaction::with(['product', 'customer'])->get();

        return view('pegawai.transaksi', compact('transactions'));
    }


    public function updateStatus(Request $request, $transaction_id)
    {
        $transaction = Transaction::findOrFail($transaction_id);

        // Menentukan status berdasarkan aksi
        if ($request->action == 'accept') {
            $transaction->status = 'approved';
        } elseif ($request->action == 'reject') {
            $transaction->status = 'rejected';
        }

        // Menyimpan perubahan
        $transaction->save();

        // Mengembalikan response
        return response()->json([
            'status' => 'success',
            'message' => 'Status transaksi berhasil diperbarui',
            'new_status' => $transaction->status
        ]);
    }

    public function showHistory()
    {
        $transactions = Transaction::where('customer_id', auth()->user()->customer->customer_id)
            ->orderBy('created_at', 'desc')
            ->get();


        return view('history', compact('transactions'));
    }
}
