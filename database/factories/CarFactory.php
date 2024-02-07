<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{

    public function definition()
    {
        return [
            'model' => $this->faker->word,
            'manufacturer' => $this->faker->word, 
            'year' => $this->faker->numberBetween(2000, 2022), 
            'color' => $this->faker->colorName, 
            'registration_number' => $this->faker->unique()->regexify('[A-Z0-9]{10}'), 
        ];
    }
}
