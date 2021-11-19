<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quailifaction' => $this->faker->name,
            'stage' => $this->faker->numberBetween(1, 10000),
            'stage' => $this->faker->numberBetween(1, 10000),
            'stage' => $this->faker->numberBetween(1, 10000),
            'stage' => $this->faker->numberBetween(1, 10000),


            'bonus_programms_id' => $this -> faker -> numberBetween(1,6)

        ];
    }
}
