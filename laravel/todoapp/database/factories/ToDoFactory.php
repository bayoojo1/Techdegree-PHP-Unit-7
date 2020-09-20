<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ToDo;
use Faker\Generator as Faker;

$factory->define(ToDo::class, function (Faker $faker) {
    return [
        'item'=> $faker->sentence($nbWords = 3, $variableNbWords = true),
        'status'=> $faker->randomNumber(2)
    ];
});
