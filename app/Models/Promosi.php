<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    protected $table = 'promosi';

    protected $fillable = [
        'jenis_promosi',
        'keterangan',
        'batas_waktu',
        'kode',
        'potongan',
        'status',
    ];
    
}
