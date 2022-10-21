<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PostCategory::class;


    public function definition()
    {
        return [
            'post' => $this->faker->randomElement(Post::all()->pluck('id')->toArray()),
            'category' => $this->faker->randomElement(Category::all()->pluck('id')->toArray())
        ];
    }
}




