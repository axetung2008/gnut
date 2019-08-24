<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersSeeder');
    }
}

class UsersSeeder extends Seeder{

    public function run()
    {
    	DB::table('users')->insert([
    		['name'=>'admin','email'=>'admin','password'=>Hass::make(112233)],
    		['name'=>'tung','email'=>'editor','password'=>Hass::make(112233)],
    	]);
    }
}