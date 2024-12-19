<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kegiatan-00.jpg', ''],
            ['kegiatan-01.jpg', ''],
            ['kegiatan-02.jpg', ''],
        ];

        foreach ($data as $item) {
            Image::create([
                'name' => $item[0],
                'alt' => $item[1],
            ]);
        }
    }
}
