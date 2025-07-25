<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    /** @use HasFactory<\Database\Factories\MahasiswaFactory> */
    use HasFactory;
}
