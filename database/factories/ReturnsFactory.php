<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Returns;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Returns>
 */
class ReturnsFactory extends Factory
{
    protected $model = Returns::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();

        return [
            'ProductID' => $product->ProductID,
            'CategoryID' => $category->CategoryID,
            'ReturnQuantity' => $this->faker->numberBetween(100, 500),
            'ReturnDate' => $this->faker->date, 
            'ReasonofReturn' => $this->faker->text,
        ];
    }
}
