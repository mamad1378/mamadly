<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\story;
use Faker\Generator as Faker;

$factory->define(story::class, function (Faker $faker) {
    return [
        'article_id' => \App\article::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
