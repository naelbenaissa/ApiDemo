<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->sentence,
            'lien_image' => $this->faker->unique()->url,
            'prix' => $this->faker->randomFloat(2, 1, 100),
            'tva' => $this->faker->randomNumber(2) . $this->faker->randomNumber(3) . $this->faker->randomNumber(3),
        ];
    }

}
