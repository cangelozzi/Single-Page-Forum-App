<?php

use Faker\Generator as Faker;

use App\User;

$factory->define(App\Model\Like::class, function (Faker $faker) {
  return [
        // Fake data fields using $faker ...import User.

                // user will return a random id
    'user_id' => function () {
      return User::all()->random();
    }
  ];
});
