<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function index()
    {
        // Get all transactions for the logged-in user
        $transactions = Transaction::where('customer_id', auth()->user()->customer_id)
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        return view('history', compact('transactions'));
    }
}
