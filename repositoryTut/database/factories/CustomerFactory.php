<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'user_id' => factory(User::class),
        'name' => $faker->name,
        'active' => random_int(0,1)
    ];
});
