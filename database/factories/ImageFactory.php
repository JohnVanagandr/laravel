<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));

        return [
            'name' => $this->faker->sentence(3),
            'path' => $this->faker->imageUrl(500,500, false),
        ];
    }
}
