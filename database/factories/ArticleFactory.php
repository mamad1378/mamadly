<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\article;
use Faker\Generator as Faker;

$factory->define(article::class, function (Faker $faker) {
    return [
        'title' => $faker->title(),
        'article_url' => $faker->url(),
        'description' => $faker->paragraph(2),
        'feed_id' => \App\feed::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
