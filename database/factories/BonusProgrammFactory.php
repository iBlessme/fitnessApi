<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BonusProgrammFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_programm' => $this->faker->name,
            'cost' => $this->faker->numberBetween(1, 10000),

        ];
    }
}
