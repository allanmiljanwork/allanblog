<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'User McUserface'),
            'email' => env('DEFAULT_USER_EMAIL', 'user@mail.com'),
            'password' => env('DEFAULT_USER_PASSWORD_HASH', bcrypt('password'))
        ]);
        User::factory(10)->create();
    }
}