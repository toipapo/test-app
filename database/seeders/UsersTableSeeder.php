<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'John Doe',
            'email' => 'john_doe@gmail.com',
            'password' => Hash::make('password'),
            'rememer_token' => str_random(10),
        ]);
    }
}
