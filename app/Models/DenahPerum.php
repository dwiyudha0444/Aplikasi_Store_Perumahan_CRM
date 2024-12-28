<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenahPerum extends Model
{
    protected $table = 'bangunan';

    protected $fillable = [
        'nama',
        'deskripsi',
        'jalan',
        'blok',
        'nomer',
        'panjang',
        'luas',
        'harga',
        'foto',
        'status',
        'fasilitas'
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_users', 'id');
    }
}
