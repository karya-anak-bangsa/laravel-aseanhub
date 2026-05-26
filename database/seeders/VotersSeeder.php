<?php

namespace Database\Seeders;

use App\Models\Voters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VotersSeeder extends Seeder
{
    public function run(): void
    {
        Voters::truncate();
        Voters::factory()->count(30)->create();

        Voters::create([
            'voters_name'           => 'Example Voters',
            'voters_country'        => 'Indonesia',
            'ip_address'            => '192.168.1.1',
            'mac_address'           => 'EE:CE:27:91:0E:F8',
            'email'                 => 'example.voters@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);
    }
}
