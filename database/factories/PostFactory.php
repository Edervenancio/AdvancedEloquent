<?php

namespace database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Post::class;

    public function definition() {

        $title = $this->faker->paragraph(1);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'subtitle' => $this->faker->paragraph(1),
            'description' => $this->faker->paragraph(5),
            'author' => $this->faker->randomElement(User::all()->pluck('id')->toArray())
        ];
    }
}
