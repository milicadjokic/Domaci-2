<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "description" => $this->faker->realText(),
            "duration" => $this->faker->numberBetween(30, 300),
            "rate" => $this->faker->randomFloat(2, 1, 5),
            "director_id" => $this->faker->numberBetween(1, 10),
            "genre_id" => $this->faker->numberBetween(1, 5)
        ];
    }
}
