<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Collection::class, function (Faker $faker) {
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'adv_id' => $faker -> numberBetween($min = 1, $max = 100),
        'user_id' => $faker -> numberBetween($min = 1, $max = 100),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
