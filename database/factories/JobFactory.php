<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(3, true),
            'salary' => $this->faker->numberBetween(40000, 120000),
            'tags' => implode(', ', $this->faker->words(3)),
            'job_type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract']), // Fix randomElement
            'remote' => $this->faker->boolean(),
            'requirements' => $this->faker->sentence(3, true),
            'benefits' => $this->faker->sentence(2, true),
            'address' => $this->faker->streetAddress(), // Fixed extra space
            'city' => $this->faker->city(), // Fixed extra space
            'state' => $this->faker->state(), // Fixed extra space
            'zipcode' => $this->faker->postcode(), // Fixed extra space
            'contact_email' => $this->faker->safeEmail(), // Fixed extra space
            'contact_phone' => $this->faker->phoneNumber(), // Fixed extra space
            'company_name' => $this->faker->company(),
            'company_description' => $this->faker->paragraph(2, true),
            'company_logo' => $this->faker->imageUrl(100, 100, 'business', true, 'logo'),
            'company_website' => $this->faker->url(),
        ];
    }
}
