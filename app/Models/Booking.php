<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'pemilihan_siteplan';

    protected $fillable = [
        'id_users',
        'id_bangunan',
        'titik_lokasi',
        'blok',
    ];
}
