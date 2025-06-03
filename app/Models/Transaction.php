<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'customer_id',
        'product_id',
        'payment_proof',
        'status',
        'total_price'
    ];

    // Define the relationship with Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    // Define the relationship with Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // Status constants for better code readability
    const STATUS_PENDING = 'pending';
    const STATUS_PAID = 'paid';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'reject';

    // Optional: Accessor to format price
    public function getTotalPriceFormattedAttribute()
    {
        return 'Rp' . number_format($this->total_price, 0, ',', '.');
    }
}