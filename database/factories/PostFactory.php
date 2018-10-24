<?php

use Faker\Generator as Faker;


// $factory->define(App\Post::class, function (Faker $faker) {
//     return [
//         'title' => $faker->title,
//         'body' => $faker->body,
//         'user_id' => $facker->rand(1,20000), // secret
//         'slug' => $facker->slug,
//     ];
// });



$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->user_id,
        'title' => $faker->title,
        'body' => $faker->body,
        'slug' => $faker->slug, 
        //'remember_token' => str_random(10),
    ];
});

