<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OpeningSpeeches;

class OpeningSpeechesSeeder extends Seeder
{
    public function run(): void
    {
        OpeningSpeeches::truncate();

        OpeningSpeeches::create([
            'name'          => 'Dr. Ir. Pramono Anung Wibowo, M.M',
            'position'      => 'Governor of DKI Jakarta',
            'message'       => 'As Governor of Jakarta, I am proud to welcome all participants to the ASEAN Hub International Design Competition. 
                                Jakarta is proud to host this initiative as part of our commitment to sustainable and inclusive urban development. 
                                We encourage all participants to contribute innovative ideas that reflect the spirit of collaboration across the ASEAN region.',
            'photo'         => 'opening-speeches/opening-01.webp',
            'sort_order'    => 1
        ]);

        OpeningSpeeches::create([
            'name'          => 'H. Rano Karno, S.I.P.',
            'position'      => 'Deputy Governor of DKI Jakarta',
            'message'       => 'The ASEAN Hub reflects our shared vision of collaboration and creativity across Southeast Asia.
                                We invite all participants to explore bold and impactful ideas that address real urban challenges and contribute to a better future.',
            'photo'         => 'opening-speeches/opening-02.webp',
            'sort_order'    => 2
        ]);

        OpeningSpeeches::create([
            'name'          => 'Tona Hutauruk, S.T., M.Sc.',
            'position'      => 'Head of the Regional Cooperation Bureau',
            'message'       => 'Through this competition, we aim to strengthen regional cooperation by encouraging multidisciplinary innovation.
                                We look forward to seeing ideas that combine local identity with global relevance.',
            'photo'         => 'opening-speeches/opening-03.webp',
            'sort_order'    => 3
        ]);
    }
}
