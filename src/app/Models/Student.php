<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'email',
        'no_telp',
        'alamat',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];
}