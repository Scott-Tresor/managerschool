<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Resultat;
use Faker\Generator as Faker;

$factory->define(Resultat::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'prenom' => $faker->firstName,
        'department' => $faker->city
    ];
});
