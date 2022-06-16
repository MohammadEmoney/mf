<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name =  $this->faker->words($nb = 2, $asText = false);
        $slug = Str::slug($name, '_');
        $price = $this->faker->numberBetween($min = 10000, $max = 900000);
        $sale_price = $price * ($this->faker->numberBetween(0, 20) / 100);
        $sku = "MF-" . $this->faker->numberBetween(1000, 9999);
        return [
            'name' => $name,
            'slug' => $slug,
            'category_id' => Category::all()->random()->id,
            'product_attribute_id' => ProductAttribute::all()->random()->id,
            'price' => $price,
            'sale_price' => $sale_price,
            'sku' => $sku,
            'status' => $this->faker->randomElement($array = array ('draft','publish','pending')),
            'product_attributes' => $this->faker->paragraphs($nb = 3, $asText = false),
            'on_sale' => $this->faker->boolean($chanceOfGettingTrue = 70),
            'short_description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 200),
            'rating_count' => $this->faker->numberBetween(0,5),
            'average_rating' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
        ];
    }
}
