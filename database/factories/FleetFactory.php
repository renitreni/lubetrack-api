<?php

namespace Database\Factories;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fleet>
 */
class FleetFactory extends Factory
{
    protected $model = Fleet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'plate_no' => fake()->uuid(),
            'brand' => fake()->randomElement(['ford', 'nissan', 'mitsubishi']),
            'year_model' => fake()->dateTimeInInterval('-10 years')->format('Y'),
            'model' => fake()->randomElement(['Model X', 'Model A', 'Model B', 'Model C']),
            'body_type' => fake()->randomElement(['Sedan', 'Hatchback', 'MPV', 'SUV']),

        ];
    }
}
