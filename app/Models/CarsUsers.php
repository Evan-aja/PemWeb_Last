<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsUsers extends Model
{
    use HasFactory;
    protected $fillable=[
        'car_id',
        'user_id',
        'peminjaman',
        'pengembalian',
        'harga',
        'konfirmasi',
        'foto',
        'lunas'
    ];
}
