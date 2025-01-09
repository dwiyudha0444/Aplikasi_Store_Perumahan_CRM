<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';

    protected $fillable = [
        'id_pembayaran',
        'nama_pelanggan',
        'bukti_dp_lunas'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_pembayaran', 'id');
    }

    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
