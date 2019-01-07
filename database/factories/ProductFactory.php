<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(2),
        'price' => $faker->numberBetween(0, 999999),
        'description' => $faker->text(100),
        'image' => \Faker\Provider\Image::image(storage_path() . '/app/public/products', 600, 350, 'cats', 'false'),
        'outstanding' => $faker->boolean(50),
        'category_id'=> \App\Category::all()->random()->id,
    ];
});
