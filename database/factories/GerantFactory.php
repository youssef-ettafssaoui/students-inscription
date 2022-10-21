<?php

namespace Database\Factories;

use App\Models\Gerant;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class GerantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Gerant::class;

    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'gname' => $name = $this->faker->name,
            'slug' => Str::slug($name),
            'position' => $this->faker->jobTitle,
            'work' => $this->faker->company,
            'origin' => $this->faker->country,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'logo' => 'man.png',
            'education' => $this->faker->text,
        ];
    }
}