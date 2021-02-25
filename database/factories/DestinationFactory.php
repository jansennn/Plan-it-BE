<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destination;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Destination::class, function (Faker $faker) {
    return [
        'kabupaten_id' => 1,
        'name' => $faker->name,
        'address' => $faker->address,
        'rating' => 5, // password
        'lat' => $faker->latitude,
        'long' => $faker->longitude,
        'image' => $faker->imageUrl($width = 640, $height = 500),
        'opening_hours' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'closed_hours' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => 1
    ];
});
