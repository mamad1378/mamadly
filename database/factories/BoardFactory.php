<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\board;
use Faker\Generator as Faker;

$factory->define(board::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'user_id' => \App\user::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
