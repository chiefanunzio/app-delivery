<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstname,
        'lastname' => $faker -> lastname,
        'address' => $faker -> streetAddress,
        'email' => $faker -> freeEmail, 
        'amount' => $faker -> randomFloat(2, 1, 100 ),
        'created_at'=> $this->faker->dateTimeBetween("-6 months", now()),
    ];
});
