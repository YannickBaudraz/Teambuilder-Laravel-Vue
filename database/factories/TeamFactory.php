<?php

namespace Database\Factories;

use App\Models\State;
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
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'name'     => "string",
        'state_id' => "int",
    ])] public function definition(): array
    {
        /** @var State $state */
        $state = State::all()->random();

        return [
            'name'     => $this->faker->unique()->company,
            'state_id' => $state->id,
        ];
    }
}
