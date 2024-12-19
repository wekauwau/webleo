<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        // TODO: finish
        $data = [
            ['Ketua'],
        ];

        foreach ($data as $item) {
            Position::create([
                'member_id' => $item[0],
                'executive_id' => $item[1],
                'division_id' => $item[2],
            ]);
        }
    }
}
