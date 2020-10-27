<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'prenom' => $faker->firstName,
        'sexe' => $faker->title('male'|'female'),
        'birthdays' => $faker->date,
        'nationality' => $faker->country,
        'phoneNumber' => $faker->phoneNumber,
        'adress' => $faker->streetAddress,
        'ville' => $faker->state,
        'school' => $faker->jobTitle,
        'province' => $faker->citySuffix,
        'codeExetat' => $faker->numberBetween(7000000, 7999999),
        'option' => $faker->companySuffix,
        'annee' => $faker->date,
        'pourcent' => $faker->numberBetween(50, 100),
        'Department' => $faker->lastName,
        'Depart' => $faker->streetName
    ];
});
