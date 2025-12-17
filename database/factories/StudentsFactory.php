<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "name"=>$this->faker->name(),
            "email"=>$this->faker->email(),
            "dob"=>$this->faker->date(),
            "gender"=>$this->faker->randomElement(['m','f']),
            "user_id"=>$this->faker->numberBetween(1,90),
            "class_id"=>$this->faker->numberBetween(1,5),
        ];
    }
}
