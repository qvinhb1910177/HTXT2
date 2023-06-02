<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = ['hoten', 'gioitinh', 'ngaysinh', 'noisinh', 'dantoc', 'cccd', 'email', 'sdt', 'diachi'];
    public $timestamps = false;
    
}
