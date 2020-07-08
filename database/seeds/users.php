<?php

use Illuminate\Database\Seeder;
use App\user;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
        	'name' => 'Yuvania',
        	'email' => 'castilloyuvania15@gmail.com',
        	'password' => '12345678'
        ]);
    }
}
