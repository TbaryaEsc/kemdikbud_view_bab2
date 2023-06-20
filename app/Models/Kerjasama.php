<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;

    protected $fillable = [
        'ringkasanmou',
        'nomormoa',
        'deskripsimoa',
        'tglmulaimoa',
        'tglberakhirmoa',
        'misiprogram',
        'targetprogram',
        'alasanmitra',
        'prinsipkerjasama',
        'manfaatkerjasama',
        'tantanganpelaksanaan',
        'kepemilikanhakcipta',
        'mekanismeresipokal',
        'keberlanjutankerjasama',
        'hakdankewajiban',
        'haktercantum',
        'created_at',
        'updated_at',
    ];
}
