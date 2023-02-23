<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumne>
 */
class AlumneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>fake()->name(),
            'apellido1'=>fake()->lastName(),
            'apellido2'=>fake()->lastName(),
            'edad'=>fake()->numberBetween(18,99),
            'adreça'=>fake()->address(),
            'telefon'=>fake()->phoneNumber(),
            'dni'=>fake('es_ES')->dni(),
        ];
    }
}
