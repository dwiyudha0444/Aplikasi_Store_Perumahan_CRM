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
        'blok',
        'jalan'
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
