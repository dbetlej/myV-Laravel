<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Wishes;

class WishesFactory extends Factory
{
    protected $model = Wishes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->words(30, true),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
