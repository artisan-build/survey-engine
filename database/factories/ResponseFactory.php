<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Response;
use Faker\Generator as Faker;

$factory->define(Response::class, function (Faker $faker) {
    return [
        'survey_id' => $faker->numberBetween(1, 10000),
        'responses' => [],
    ];
});
