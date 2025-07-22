<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Ahmad Nur',
            'nim' => '20231001',
            'email' => 'ahmad@example.com',
            'jurusan' => 'Teknik Informatika'
        ]);
    }
}