<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'roleSeeder' => 'Admin'
        ]);
        user::create([
            'roleSeeder' => 'User'
        ]);

    }
}