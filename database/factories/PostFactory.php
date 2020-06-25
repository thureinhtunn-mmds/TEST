<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;
$factory->define(App\Post::class, function (Faker $faker) {
    return [
         'user_id' =>rand(1,10),
         'title'=> $faker->sentence(),
         'body'=>$faker->paragraph(),
         'created_at'=>Carbon::now(),
         'updated_at'=>Carbon::now()
    ];
});
