<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run(): void
    {
        // TODO: leader_user_id
        $data = [
            ['Jurnalistik'],
            ['HRD'],
            ['Humas'],
            ['Kaderisasi'],
            ['Orsen'],
            ['Media'],
            ['P2'],
            ['Danus'],
            ['Kesravo'],
            ['IT'],
        ];

        foreach ($data as $item) {
            Executive::create([
                'name' => $item[0],
                'leader_user_id' => $item[1],
            ]);
        }
    }
}
