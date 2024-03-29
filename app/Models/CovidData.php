<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidData extends Model
{
    use HasFactory;

    protected $fillable = [
        'SPOL',
        'LE_WBC',
        'Limf',
        'Mid',
        'Gran',
        'HGB',
        'FinalResult',
    ];
}
