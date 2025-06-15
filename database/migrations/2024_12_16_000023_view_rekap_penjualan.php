<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW rekap_penjualan AS 
            SELECT 
                t.transaction_id AS transaction_id, 
                c.name AS customer, 
                p.name AS pegawai, -- tambahkan ini
                t.total_price AS total_price, 
                t.status AS status, 
                t.created_at AS created_at
            FROM transactions t
            JOIN customer c ON t.customer_id = c.customer_id
            LEFT JOIN pegawai p ON t.pegawai_id = p.pegawai_id
            WHERE t.status = 'approved'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS rekap_penjualan");
    }
};
