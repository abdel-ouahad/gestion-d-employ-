<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registretion_number' => fake()->numberBetween(),
            'fullname' => fake()->name(),
            'depart' => fake()->word(),
            'hire_date' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'adresse' => fake()->address(),
            'city' => fake()->city(),
        ];
    }
}
