<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role; // WAJIB

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role kalau belum ada
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Penulis']);

        // Buat user admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $admin->assignRole('Admin');

        // Buat user penulis
        $penulis = User::create([
            'name' => 'Penulis',
            'email' => 'penulis123@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $penulis->assignRole('Penulis');
    }
}
