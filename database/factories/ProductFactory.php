<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'articul' => $this->faker->unique()->isbn10(),
            'category_id' => $this->faker->biasedNumberBetween(1,5),
            'price' => $this->faker->randomFloat(2, 30, 100),
        ];
    }
}
