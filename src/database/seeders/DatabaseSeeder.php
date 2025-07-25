<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder mahasiswa dan dosen
        $this->call([
        MahasiswaSeeder::class,
        DosenSeeder::class,
    ]);

        // Buat role super_admin dulu
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);

        // Buat user admin
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        // Assign role ke user
        $user->assignRole($superAdminRole);
    }
}
