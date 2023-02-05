<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_produk',
        'nama',
        'qty',
        'alamat',
        'hp',
        'pembayaran',
        'status',
    ];
}
