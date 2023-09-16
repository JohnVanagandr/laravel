<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $firs_name = fake()->firstName('male'|'female');
        $last_name = fake()->lastName('male'|'female');
        return [
            'first_name' => $firs_name,
            'last_name' => $last_name,
            'phone'     => $this->faker->phoneNumber,
            'sexo'      => $this->faker->randomElement(['Hombre', 'Mujer', 'Otro']),
            'birthdate' => $this->faker->date,
            'facebook'  => 'www.instagram.com/' . $firs_name,
            'instagram' => 'www.instagram.com/' . $firs_name,
            'linkedin'  => 'linkedin.com/' . $firs_name,
        ];
    }
}
