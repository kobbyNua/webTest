<?php

namespace Database\Factories;

use App\Models\Farmer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farmer>
 */
class FarmerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =\App\Models\Farmer::class;
    public function definition(): array
    {
        return [
            //

            'first_name' => fake()->firstName,
            'last_name' => fake()->last_name(),
            'birth_place' => fake()->birth_place(),
            'house_number' => fake()->house_number(),
            'occupation' => fake()->occupation(),
            'region' => fake()->region(),
            'dob' => fake()->dob(),
            'community' => fake()->community(),
            'district' => fake()->district,
            'marital_statu' => fake()->marital_statu(),
            'bio' => fake()->paragraph(),
            'photo' => fake()->pohto(),
          
        ];
    }
}
