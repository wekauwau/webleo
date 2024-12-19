<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        Member::factory(46)->create();

        $base = '24';
        for ($i = 1; $$i < 47; $$i++) {
            Member::find($i)
                ->update([
                    'student_id' => $base + sprintf('%02d', $i),
                ]);
        }
    }
}
