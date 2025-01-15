<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPelanggan extends Model
{
    protected $table = 'daftar_pelanggan';

    protected $fillable = [
        'id_user',
        'id_marketing',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }


}
