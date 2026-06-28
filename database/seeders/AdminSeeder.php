<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::truncate();
        Admin::create([
            'admin_name' => 'Aryajaya Alamsyah',
            'email' => 'aseanhub.alamsyah@gmail.com',
            'password' => Hash::make('12341234'),
        ]);
        Admin::create([
            'admin_name' => 'Admin Asean HUB',
            'email' => 'admin.aseanhub@mail.com',
            'password' => Hash::make('2026AseanHUB2026'),
        ]);
    }
}
