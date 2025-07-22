<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $students = [
            [
                'nim' => '2021001',
                'nama' => 'Ahmad Fauzi',
                'jurusan' => 'Teknik Informatika',
                'email' => 'ahmad.fauzi@email.com',
                'no_telp' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'status' => 'aktif',
            ],
            [
                'nim' => '2021002',
                'nama' => 'Siti Nurhaliza',
                'jurusan' => 'Sistem Informasi',
                'email' => 'siti.nurhaliza@email.com',
                'no_telp' => '081234567891',
                'alamat' => 'Jl. Sudirman No. 456, Bandung',
                'status' => 'aktif',
            ],
            [
                'nim' => '2021003',
                'nama' => 'Budi Santoso',
                'jurusan' => 'Teknik Komputer',
                'email' => 'budi.santoso@email.com',
                'no_telp' => '081234567892',
                'alamat' => 'Jl. Gatot Subroto No. 789, Surabaya',
                'status' => 'aktif',
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}