<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    Dosen::create([
        'nama' => 'Dr. Siti Aminah',
        'nidn' => '1002001',
        'email' => 'siti@example.com',
        'prodi' => 'Sistem Informasi'
    ]);
}
}
