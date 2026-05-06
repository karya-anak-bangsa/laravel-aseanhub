<?php

namespace Database\Seeders;

use App\Models\Judges;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JudgesSeeder extends Seeder
{
    public function run(): void
    {
        # reset data judges
        Judges::truncate();

        # data dummy
        Judges::factory()->count(10)->assessment_one()->create();
        Judges::factory()->count(10)->assessment_two()->create();
        Judges::factory()->count(10)->final_assessment()->create();

        # data example
        Judges::create([
            'judges_name'           => 'Example Judges',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => 'Institut Pertanian Bogor',
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/person-1.webp',
            'email'                 => 'example.judges@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);
    }
}
