<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(categoriesfeeds::class, function (Faker $faker) {
    return [
        'category_id' => \App\category::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
        'feed_id' => \App\feed::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
