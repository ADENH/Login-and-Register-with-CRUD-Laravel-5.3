<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin
        App\User::create([
        	'name' => 'Admin',
        	'email' => 'adenh1994@gmail.com',
        	'password' => bcrypt('admin'),
        	'role' => 'admin'
        	]);

        //User
        App\User::create([
        	'name' => 'User',
        	'email' => 'adenh@gmail.com',
        	'password' => bcrypt('user'),
        	'role' => 'user'
        	]);
    }
}
