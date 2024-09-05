<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => $this -> faker -> sentence(),
            'answer1' => $this -> faker -> sentence(),
            'answer2' => $this -> faker -> sentence(),
            'answer3' => $this -> faker -> sentence(),
            'answer4' => $this -> faker -> sentence(),
            'correctAnswer' => $this ->faker -> randomElement(['answer1', 'answer2', 'answer3', 'answer4']),
        ];
    }
}
