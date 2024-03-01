<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiModel extends Model
{
    use HasFactory;
    protected $table = 'koleksis';
    protected $fillable = [
        'kd_koleksi',
        'judul',
        'jns_bhn_pustaka',
        'jns_koleksi',
        'jns_media',
        'pengarang',
        'penerbit',
        'tahun',
        'cetakan',
        'edisi',
        'status',
    ];
}
