<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Pegawai;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'customer_id',
        'product_id',
        'pegawai_id', // ✅ tambahkan ini
        'payment_proof',
        'status',
        'total_price',
    ];

    // Relasi dengan Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    // Relasi dengan Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    // ✅ Relasi dengan Pegawai (yang menyetujui transaksi)
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'pegawai_id');
    }

    // Konstanta status
    const STATUS_PENDING = 'pending';
    const STATUS_PAID = 'paid';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected'; // <- typo 'reject' diganti ke 'rejected'

    // Akses format harga
    public function getTotalPriceFormattedAttribute()
    {
        return 'Rp' . number_format($this->total_price, 0, ',', '.');
    }
}
