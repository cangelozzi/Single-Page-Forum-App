<?php

use Faker\Generator as Faker;

// USE QUESTION MODEL
use App\Model\Question;

$factory->define(App\Model\Reply::class, function (Faker $faker) {
    return [
        // factories entries field for Replies
        'body' => $faker->text,
        
        'question_id' => function() {
          return Question::all()->random();
        },

        'user_id' => function() {
          return \App\User::all()->random();
        }
    ];
});
