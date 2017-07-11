<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'admin@example.app',
        	'password' => bcrypt('123456')
        ]);
    }
}
