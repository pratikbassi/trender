<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Pratik\Graph;

$factory->define(Pratik\Graph::class, function (Faker $faker) {
    return [
        'keyword'=> $faker->name,
        'user_id'=> rand(1, 50),
        'url'=> $faker->url,
    ];
});
