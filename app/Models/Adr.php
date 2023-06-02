<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adr extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tinh',
        'Huyen',
        'Xa'
    ];
    public $timestamps = false;
}
