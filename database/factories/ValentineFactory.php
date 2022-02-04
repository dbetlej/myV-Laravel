<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ValentineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail(),
            'cupid_name' => $this->faker->name(),
            'cupid' => $this->faker->ipv4(),
            'valentine_token' => Str::random(10),
            'lover' => null,
            'created_at' => now(),
            'updated_at' => null
        ];
    }
}
