<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(App\Models\Tag::class, function (Faker $faker) {
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'tag_name'=>$faker->word,
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
