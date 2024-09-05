<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => $this -> faker -> randomDigit(),
            'title' => $this -> faker -> text(),
            'content' => $this -> faker -> paragraph(10),
            'media' => $this -> faker -> imageUrl(),
        ];
    }
}
