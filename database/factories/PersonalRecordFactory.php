<?php

namespace Database\Factories;

use App\Models\Movement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => User::factory()->create()->id,
            'movement_id' => Movement::factory()->create()->id,
            'value'       => rand(100, 190),
            'data'        => now(),
        ];
    }
}
