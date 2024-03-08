<?php

namespace Database\Factories;

use App\Models\Detail_title;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value'=>$this->faker->text,
            'product_id'=>Product::get()->random()->id,
            'detail_title_id'=>Detail_title::get()->random()->id
        ];
    }
}
