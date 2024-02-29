<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaModel extends Model
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $fillable = [
        'kd_anggota',
        'nm_anggota',
        'jk',
        'tp_lahir',
        'tg_lahir',
        'alamat',
        'no_hp',
        'jns_anggota',
    ];
}
