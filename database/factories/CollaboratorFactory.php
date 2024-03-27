<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xvladqt\Faker\LoremFlickrProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collaborator>
 */
class CollaboratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($this->faker));
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'title' => $this->faker->jobTitle,
            'address' => $this->faker->streetAddress,
            'address_2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'postal_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'image' => $faker->imageUrl($width = 480, $height = 480,  'cats')

        ];
    }
}
