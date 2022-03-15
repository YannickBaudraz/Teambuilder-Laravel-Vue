<?php

namespace Database\Factories;

use App\Enums\MemberRole;
use Illuminate\Support\Str;
use App\Enums\MemberStatus;
use JetBrains\PhpStorm\ArrayShape;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'name'           => "string",
        'password'       => "string",
        'role'           => "string",
        'status'         => "string",
        'remember_token' => "string",
    ])] public function definition(): array
    {
        return [
            'name'           => $this->faker->unique()->name(),
            'password'       => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role'           => collect(MemberRole::cases())->random()->value,
            'status'         => collect(MemberStatus::cases())->random()->value,
            'remember_token' => Str::random(10),
        ];
    }
}
