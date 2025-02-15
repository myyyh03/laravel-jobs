<?php

namespace Database\Factories;

use Illuminate\Database\Console\Factories\FactoryMakeCommand;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => Fake()->randomElement(['$50,000 USD' , '$60,000 USD' , '$100,000 USD' , '$90,000 USD' , '$75,000 USD']),
            'location' => 'Remote',
            'url' => fake()->url(),
            'featured' => 'false',
            'schedule' => 'Full Time',
        ];
    }
}
