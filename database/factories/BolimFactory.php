<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bolim;
use Faker\Generator as Faker;


$factory->define(Bolim::class, function (Faker $faker) {
    $arry = ["Namangan", "Farg'ona", "Andijon", "Toshkent", "Sirdaryo", "Jizzax", "Navoiy", "Buxoro", "Qashqadaryo", "Xorazm", "Samarqand", "Surxondaryo"];
    return [
        'name' => $arry[$faker->numberBetween(0, 12)],
        'text' => $faker->text(300),
    ];
});
