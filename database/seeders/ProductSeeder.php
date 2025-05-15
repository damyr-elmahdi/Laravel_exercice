<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
  
        $faker = Faker::create();
        

        $categories = Category::all();
      
        if ($categories->isEmpty()) {
            $this->call([
                CategorySeeder::class,
            ]);
            $categories = Category::all();
        }

        foreach (range(1, 10) as $index) {
            Product::create([
                'name' => $faker->word(),
                'price' => $faker->randomFloat(2, 5, 1000),
                'category_id' => $categories->random()->id,
            ]);
        }
    }
}