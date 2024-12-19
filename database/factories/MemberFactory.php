<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    public function definition(): array
    {
        return [
            // TODO: student_id
            'name' => fake()->name(),
            'cohort' => '24',
            'address' => fake()->address(),
            'gender' => fake()->boolean(),
            'join_date' => new \DateTime('2024-12-19'),
        ];
    }
}
