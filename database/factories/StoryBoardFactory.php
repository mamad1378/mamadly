<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(storyboard::class, function (Faker $faker) {
    return [
        'story_id' => \App\story::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
        'board_id' => \App\board::inRandomOrder()->select('id')->limit('1')->get()->first()->id,
    ];
});
