<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhotoGallery;

class PhotoGallerySeeder extends Seeder
{
    public function run(): void
    {

        PhotoGallery::truncate();

        PhotoGallery::create([
            'title'             => 'Example Title 1',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-1.webp',
            'sort_order'        => 1,
        ]);

        PhotoGallery::create([
            'title'             => 'Example Title 2',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-2.webp',
            'sort_order'        => 2,
        ]);

        PhotoGallery::create([
            'title'             => 'Example Title 3',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-3.webp',
            'sort_order'        => 3,
        ]);

        PhotoGallery::create([
            'title'             => 'Example Title 4',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-4.webp',
            'sort_order'        => 4,
        ]);
    }
}
