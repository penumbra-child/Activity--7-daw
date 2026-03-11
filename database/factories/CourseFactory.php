<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => strtoupper('ROB' . $this->faker->unique()->numberBetween(200, 999)),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'robotics_kit_id' => $this->faker->numberBetween(1, 3), // StarterKit, Educational, Kit5
        ];
    }
}