<?php

namespace Database\Seeders;

use App\Models\AboutAseanHub;
use Illuminate\Database\Seeder;

class AboutAseanHubSeeder extends Seeder
{
    public function run(): void
    {
        AboutAseanHub::truncate();
        AboutAseanHub::create([
            'title'         => 'ASEAN Hub International Design Competition',
            'description'   => '<i>Welcome to the ASEAN Hub International Design Competition, a collaborative platform that brings together creativity, innovation, and regional identity. 
                                Jakarta, as a dynamic metropolitan city and gateway to Southeast Asia, is committed to fostering sustainable urban development that reflects cultural diversity and forward-thinking design. 
                                Through this competition, we invite young architects, designers, and visionaries across ASEAN to contribute ideas that will shape the future of urban living integrating functionality, environmental responsibility, and community engagement. 
                                We believe that great cities are built not only with infrastructure, but with ideas, collaboration, and shared vision. Let us work together to build a more inclusive, resilient, and inspiring ASEAN.</i>',
            'image'         => 'about-aseanhub/default-hero.webp',
            'status_data'   => 'Active',
        ]);
    }
}
