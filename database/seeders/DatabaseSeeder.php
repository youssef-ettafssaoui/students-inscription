<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Gerant;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Categorie::truncate();
        User::factory(10)->create();
        Gerant::factory(15)->create();
        Formation::factory(25)->create();

        $categories = [
            'Informatique',
            'Mathématique',
            'Physique & Chimie',
            'Biologie',
            'Génie Civil',
            'Langues & Communication'
        ];
        foreach ($categories as $categorie) {
            Categorie::create(['name' => $categorie]);
        }

        Role::create(['name' => 'gerant']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'etudiant']);
    }
}