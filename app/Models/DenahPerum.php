<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenahPerum extends Model
{
    protected $table = 'bangunan';

    protected $fillable = [
        'nama',
        'ijazah',
        'transkip_nilai',
        'penilaian_prestasi_kerja',
        'jadwal_pendidikan',
        'status',
        'peguruan_tinggi',
        'jurusan',
        'alamat',
        'keterangan'
    ];
}
