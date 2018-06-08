<?php

use Faker\Generator as Faker;

use App\User;
use App\Model\Category;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    return [
        // creating fake data for QUESTION Factory

        // add fields/columns where fake data is needed (using $faker plugin)
        'title' => $faker->sentence,
        'slug' =>str_slug($faker->sentence),
        'body' => $faker->text,

        // category will return a random id
        'category_id' => function() {
          return Category::all()->random();
        },

        // user will return a random id
        'user_id' => function() {
          return User::all()->random();
        }

    ];
});
