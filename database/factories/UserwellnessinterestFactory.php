<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Userwellnessinterest>
 */
class UserwellnessinterestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::factory(),
            'wellness_interest_id' => \App\Models\Wellnessinterests::factory(),
        ];
    }
}
