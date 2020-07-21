<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\feed;
use Faker\Generator as Faker;

$factory->define(feed::class, function (Faker $faker) {
    return [
        'rss_url' => $faker->url(),
        'user_id' => \App\user::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
