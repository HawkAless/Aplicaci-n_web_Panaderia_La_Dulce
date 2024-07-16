<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->firstName(),
            "apellido" => $this->faker->lastName(),
            "telefono" => $this->faker->phoneNumber(),
            "direccion" => $this->faker->address(),
            //"user_id" => $this->faker->numberBetween(1, 50),
            'user_id' => User::factory()
        ];  
    }
}
