<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogPenambahanProduk extends Model
{
    protected $table = 'log_penambahan_produk';
    protected $primaryKey = 'log_id';

    protected $fillable = ['pegawai_id', 'product_id', 'name'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
