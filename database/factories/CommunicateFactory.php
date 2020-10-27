<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Communicate;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Communicate::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text
    ];
});
