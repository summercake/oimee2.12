<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Post::class, function (Faker $faker) {
    $now = Carbon::now()->toDateTimeString();
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 100),
        'category_id' => $faker->numberBetween($min = 1, $max = 12),
        'tag_id' => $faker->numberBetween($min = 1, $max = 100),
        'post_title' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
        'post_subtitle' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'post_content' => $faker->randomHtml(4,10),
        'post_last_reply_user_id' => $faker->numberBetween($min = 1, $max = 100),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
