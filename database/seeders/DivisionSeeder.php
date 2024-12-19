<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run(): void
    {
        // TODO: leader_member_id
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
            Division::create([
                'name' => $item[0],
                'leader_member_id' => $item[1],
            ]);
        }
    }
}
