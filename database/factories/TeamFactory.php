<?php

namespace Database\Factories;

use App\Enums\TeamState;
use JetBrains\PhpStorm\ArrayShape;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, string>
     */
    #[ArrayShape([
        'name'  => "string",
        'state' => "string",
    ])] public function definition(): array
    {
        return [
            'name'  => $this->faker->unique()->company,
            'state' => collect(TeamState::cases())->random()->value,
        ];
    }
}
