<?php

namespace Database\Seeders;

use App\Models\PublicationType;
use Illuminate\Database\Seeder;

class PublicationTypeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [['Kegiatan'], ['Berita'], ['Wawasan']];

        foreach ($data as $item) {
            PublicationType::create([
                'name' => $item[0],
            ]);
        }
    }
}
