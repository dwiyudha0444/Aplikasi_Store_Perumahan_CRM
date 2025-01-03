<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'id_users',
        'id_promosi',
        'id_bangunan',
        'promosi',
        'harga',
        'status',
        'tanggal_bayar',
        'metode_pembayaran',
        'bukti_bayar',
        'titik_lokasi',
        'blok'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }

    public function bangunan()
    {
        return $this->belongsTo(DenahPerum::class, 'id_bangunan', 'id');
    }
}
