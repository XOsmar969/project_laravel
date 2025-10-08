<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'classroom_id' => null, // akan diisi otomatis saat pakai hasStudents()
        ];
    }
}
