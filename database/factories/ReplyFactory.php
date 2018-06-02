<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'post_id' => $faker -> numberBetween($min = 1, $max = 100),
        'reply_to_id' => $faker -> numberBetween($min = 1, $max = 100),
        'user_id' => $faker -> numberBetween($min = 1, $max = 100),
        'reply_content' => $faker -> randomHtml(2,3),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
