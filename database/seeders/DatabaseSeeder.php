<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MemberSeeder::class,
            ExecutiveSeeder::class,
            DivisionSeeder::class,
            PositionSeeder::class,
            PublicationTypeSeeder::class,
            PublicationSeeder::class,
        ]);
    }
}
