<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use App\User;
use Faker\Generator as Faker;
class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
         $users = User::all();
         foreach ($users as $user) {
             $avatar = new Avatar();
             $avatar->telefono=$faker->phoneNumber;
             $avatar->avatar=$faker->imageUrl(640,480);
             $avatar->user_id=$user->id;
             $avatar->save();
         }

     }
}
