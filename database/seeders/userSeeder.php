<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ss',
            'email' => '-2020@vokasi.unair.ac.id',
            'password' => 's'
        ]);

        User::create([
            'name' => 'a',
            'email' => '-2020@vokasi.unair.ac.id',
            'password' => 'b'
        ]);
    }
}