<?php

namespace Database\Seeders;

use App\Models\Judges;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JudgesSeeder extends Seeder
{
    public function run(): void
    {
        Judges::truncate();
        // Judges::factory()->count(10)->assessment_one()->create();
        // Judges::factory()->count(10)->assessment_two()->create();
        // Judges::factory()->count(10)->final_assessment()->create();


        Judges::create([
            'judges_name'           => 'Her Pramtama',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-her-pratama.webp',
            'email'                 => 'example.judges-1@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Achmad D. Tardiyana',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-achmad-tardiyana.webp',
            'email'                 => 'example.judges-2@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Marco Kusumawijaya',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-marco-kusumawijaya.webp',
            'email'                 => 'example.judges-3@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Meyriana Kesuma',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-meyriana-kesuma.webp',
            'email'                 => 'example.judges-4@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Prof. Bambang Susantono',
            'origin_country'        => 'Indonesia',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-bambang-susantono.webp',
            'email'                 => 'example.judges-5@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Prof. Marlon Boarnet',
            'origin_country'        => 'United States',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-marlon.webp',
            'email'                 => 'example.judges-6@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Prof Dr. Walter Timo de Vries',
            'origin_country'        => 'Netherlands',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-walter-1.webp',
            'email'                 => 'example.judges-7@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);

        Judges::create([
            'judges_name'           => 'Prof. Wim van den Doel',
            'origin_country'        => 'Netherlands',
            'origin_institution'    => null,
            'judges_task'           => 'Assessment One',
            'judges_photo'          => 'judges/dummy/judges-doel.webp',
            'email'                 => 'example.judges-8@gmail.com',
            'password'              => Hash::make('12341234'),
        ]);
    }
}
