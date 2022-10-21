<?php

namespace Database\Factories;

use App\Models\Formation;
use App\Models\Gerant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Formation::class;

    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'gerant_id' => Gerant::all()->random()->id,
            'title' => $title = $this->faker->numerify('Formation ###'),
            'slug' => str_slug($title),
            'categorie_id' => rand(1, 6),
            'type' =>
            $this->faker->randomElement(['Gratuite', 'Payante']),
            'status' => 1,
            'description' => $this->faker->paragraph(rand(2, 10)),
            'texte' => $this->faker->paragraph(rand(2, 10)),
            'last_date' => $this->faker->DateTime,
            'masse_horraire' => rand(10, 100),
        ];
    }
}