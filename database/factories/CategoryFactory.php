<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Category::class, function (Faker $faker) {
    return [
        // fields for fake data usinga $faker
        'name' => $faker->word,
        'slug' => str_slug($faker->word),
    ];
});
