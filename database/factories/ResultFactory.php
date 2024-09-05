<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quiz_id' => $this->faker->randomDigitNotNull(),
            'user_id' => $this->faker->randomDigitNotNull(),
            'score' => $this->faker->randomFloat(2, 0, 100),
            'total_score' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
