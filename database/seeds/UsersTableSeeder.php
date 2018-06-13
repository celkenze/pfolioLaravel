<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\User::create([
            "name" => "Camelia Elkenze",
            "email" => "camelia.elkenze93@gmail.com",
            "password" => bcrypt("admin")
        ]);
    }
}
