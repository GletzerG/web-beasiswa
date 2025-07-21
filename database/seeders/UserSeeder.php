<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // ⬅️ WAJIB: panggil model User
use Illuminate\Support\Facades\Hash; // ⬅️ buat hash password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin', // default field-nya `name` bukan `nama`
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('password123'), // bikin password default
            
        ]);
        $admin->assignRole('Admin');

        $penulis = User::create([
            'name' => 'Penulis',
            'email' => 'penulis123@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $penulis->assignRole('Penulis');
    }
}
