<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\user;
use Faker\Generator as Faker;

$factory->define(user::class, function (Faker $faker) {
    return [
        'fullname' => $faker->firstName(),
        'lastname' =>$faker->lastName() ,
        'email' =>$faker->unique()->safeEmail() ,
        'password' =>$faker->password() ,
        // 'pro_pic' =>"propic/uuuurrrrrlllllllll" ,
        // 'account_type' =>$faker->numberBetween(1 , 3) ,
        // 'create_time' =>now(),
        // 'q1' =>$faker->numberBetween(1 , 2) ,
        // 'q2' =>$faker->numberBetween(1 , 2) ,
        // 'q3' =>$faker->numberBetween(1 , 2) ,
        // 'q4' =>$faker->numberBetween(1 , 2) ,
        // 'q5' =>$faker->numberBetween(1 , 2) ,
    ];
});
