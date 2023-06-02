<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoctap extends Model
{
    use HasFactory;
    protected $fillable = [
        'tinh_10_hk1',
        'tinh_10_hk2',
        'tinh_11_hk1',
        'tinh_11_hk2',
        'tinh_12_hk1',
        'tinh_12_hk2',
        'huyen_10_hk1',
        'huyen_10_hk2',
        'huyen_11_hk1',
        'huyen_11_hk2',
        'huyen_12_hk1',
        'huyen_12_hk2',
        'thpt_10_hk1',
        'thpt_10_hk2',
        'thpt_11_hk1',
        'thpt_11_hk2',
        'thpt_12_hk1',
        'thpt_12_hk2',
        'namtotnghiep',
        'dtuutien',
        'khuvucts'
        
    ];
    public $timestamps = false;
}
