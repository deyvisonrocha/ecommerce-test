<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'price' => $faker->randomDigitNotNull,
        'description' => $faker->paragraph,
        'image' => ''
    ];
});

