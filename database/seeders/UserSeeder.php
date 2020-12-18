<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Daniel Ayala',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('12345678'),

        ]);

        User::factory(99)->create();
    }
}
