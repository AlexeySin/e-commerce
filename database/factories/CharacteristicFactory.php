<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Characteristic::class, function (Faker $faker) { 
    static $a = 1;
    return [
        'goods_id'   => $a++,
        'producer'   => $faker->company,
        'address'    => $faker->city.' '.$faker->secondaryAddress,
        'produced'   => $faker->date($format = 'Y-m-d', $max = 'now').' '.$faker->time($format = 'H:i:s', $max = 'now'),
        'expiration' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone'      => $faker->tollFreePhoneNumber,
        'mail'       => $faker->email
    ];
});
