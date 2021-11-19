<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbonementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_abonement' => $this->faker->name,
            'cost_abonement' => $this->faker->numberBetween(1, 10000),
            'date_start' => $this->faker->date,
            'date_finish' => $this->faker->date,

            'bonus_programms_id' => $this -> faker -> numberBetween(1,6)

        ];
    }
}
