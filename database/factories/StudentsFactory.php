<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Classes;
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
          "user_id"=>User::inRandomOrder()->first()->id,
            "class_id"=>Classes::inRandomOrder()->first()->id,
            
        ];
    }
}
