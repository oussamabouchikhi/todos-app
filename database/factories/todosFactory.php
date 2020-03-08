<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Todos;

$factory->define(Todos::class, function (Faker $faker) {
    return [
        // generate 3 sentences
        'title' => $faker->sentence(3),
        // generate a 100 characters text
        'description' => $faker->text(100),
        // todos are not completed by default
        'completed' => false
    ];
});
