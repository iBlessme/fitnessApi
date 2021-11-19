<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [


            'abonements_id' => $this -> faker -> numberBetween(1,3),
            'user_clubs_id' => $this -> faker -> numberBetween(1,3)

        ];
    }
}
