<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

//$faker = \Faker\Factory::create();
//$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

$factory->define(App\Meal::class, function (Faker $faker) {
    return [
       // 'title' => $faker->firstName,
        'title' => $faker->foodName(),
    ];
});
