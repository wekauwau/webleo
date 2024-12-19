<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            Publication::factory()
                ->create([
                    'publication_type_id' => 1,
                    'image_id' => $i,
                ]);
        }

        for ($i = 4; $i <= 6; $i++) {
            Publication::factory()
                ->create([
                    'publication_type_id' => 2,
                    'image_id' => $i,
                ]);
        }

        for ($i = 7; $i <= 9; $i++) {
            Publication::factory()
                ->create([
                    'publication_type_id' => 3,
                    'image_id' => $i,
                ]);
        }
    }
}
