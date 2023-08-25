<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User1;
use Faker\Factory as Faker;


class create_user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker =Faker::create();
        for($i=0;$i<100;$i++){
            $user=new User1();
            $user->name=$faker->name;
            $user->email=$faker->email;
            $user->password='12345678';
            $user->save();
        }
        
       
    }
}
