<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        Publication::factory(5)
            ->create([
                'publication_type_id' => 1,
            ]);

        Publication::factory(5)
            ->create([
                'publication_type_id' => 2,
            ]);

        Publication::factory(5)
            ->create([
                'publication_type_id' => 3,
            ]);
    }
}
