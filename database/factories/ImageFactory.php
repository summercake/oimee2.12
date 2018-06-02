<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory -> define(App\Models\Image::class, function (Faker $faker){
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'image_name' => '13b73edae8443990be1aa8f1a483bc27.jpg',
        'image_path' => 'tmp/13b73edae8443990be1aa8f1a483bc27.jpg',
        'image_url'  => 'http://lorempixel.com/grey/800/400/cats/Faker/',
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
