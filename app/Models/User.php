<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'password', 'role'];
    protected $hidden = [
        'password',
    ];

    public $timestamps = true;


    public function customer()
    {
        return $this->hasOne(Customer::class, 'user_id', 'user_id');
    }
}