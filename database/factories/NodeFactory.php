<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Pratik\Node;

$factory->define(Pratik\Node::class, function (Faker $faker) {
    return [
        'frequency'=>$faker->randomDigitNotNull,
        'graph_id'=> rand(1, 50),
    ];
});
