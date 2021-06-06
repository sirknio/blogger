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
            'name' => 'Carlos Arboleda',
            'email' => 'knio16@gmail.com',
            'password' => bcrypt('Knio123456'),
        ]);
        User::factory(9)->create();
    }
}
