<?php

namespace Database\Seeders;

use App\Models\Participants;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ParticipantsSeeder extends Seeder
{
    public function run(): void
    {
        # data dummy
        Participants::truncate();
        Participants::factory()->count(30)->create();

        # data example
        Participants::create([
            'team_name'             => 'Example Team',
            'participants_name_1'   => 'Example Participants',
            'participants_name_2'   => null,
            'participants_name_3'   => null,
            'participants_name_4'   => null,
            'participants_name_5'   => null,
            'participants_country'  => 'Indonesia',
            'participants_phone'    => '081912341234',
            'email'                 => 'example.participants@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);
    }
}
