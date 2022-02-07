<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Valentine;

class ValentineFactory extends Factory
{
    protected $model = Valentine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cupid_name' => $this->faker->name(),
            'content' => $this->faker->words(30, true),
            'email' => $this->faker->safeEmail(),
            'cupid' => $this->faker->ipv4(),
            'valentine_token' => Str::random(10),
            'lover' => null,
            'created_at' => now(),
            'updated_at' => null
        ];
    }
}
