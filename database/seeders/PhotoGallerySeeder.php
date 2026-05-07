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
            'title'             => 'Hotel Indonesia Roundabout',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-0.webp',
            'sort_order'        => 0,
        ]);

        PhotoGallery::create([
            'title'             => 'MRT Hotel Indonesia',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-1.webp',
            'sort_order'        => 1,
        ]);

        PhotoGallery::create([
            'title'             => 'MRT Hotel Indonesia',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-2.webp',
            'sort_order'        => 2,
        ]);

        PhotoGallery::create([
            'title'             => 'Human Interaction',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-3.webp',
            'sort_order'        => 3,
        ]);

        PhotoGallery::create([
            'title'             => 'Human Interaction',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-4.webp',
            'sort_order'        => 4,
        ]);

        PhotoGallery::create([
            'title'             => 'Cityscape',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-5.webp',
            'sort_order'        => 5,
        ]);

        PhotoGallery::create([
            'title'             => 'Cityscape',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-6.webp',
            'sort_order'        => 6,
        ]);

        PhotoGallery::create([
            'title'             => 'Transjakarta Electric Bus',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-7.webp',
            'sort_order'        => 7,
        ]);

        PhotoGallery::create([
            'title'             => 'Transjakarta Electric Bus',
            'description'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, odit cum. Voluptates atque labore rem commodi assumenda doloremque voluptas illum repellat saepe quisquam! Dolorum fugiat sit tenetur nisi quo veniam!',
            'image'             => 'photo-gallery/photo-gallery-8.webp',
            'sort_order'        => 8,
        ]);
    }
}
