<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post' => $this->faker->randomElement(User::all()->pluck('id')->toArray()),
            'user' => $this->faker->randomElement(User::all()->pluck('id')->toArray()),
            'content' => $this->faker->paragraph('1')
        ];
    }
}


