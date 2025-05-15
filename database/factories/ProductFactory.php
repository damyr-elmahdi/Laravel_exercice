<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'category_id' => function () {
                $category = Category::inRandomOrder()->first();
                return $category ? $category->id : Category::factory()->create()->id;
            },
        ];
    }
}