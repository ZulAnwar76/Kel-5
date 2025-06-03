<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Pegawai;
use App\Models\Customer;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['username', 'password', 'role'];

    protected $hidden = ['password'];

    public $timestamps = true;

    // Relasi dengan model Pegawai
    public function pegawai()
    {
        return $this->hasOne(Pegawai::class, 'user_id', 'user_id');
    }

    // Relasi dengan model Customer
    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id');
    }
}
