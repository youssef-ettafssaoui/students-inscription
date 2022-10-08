<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;
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
        \App\Models\User::factory(10)->create();

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

        Role::truncate();
        $adminRole = Role::create(['name' => 'admin']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'user_type' => 'admin',
            'password' => bcrypt('admin@gmail.com'),
            'email_verified_at' => NOW()
        ]);

        $admin->roles()->attach($adminRole);
    }
}