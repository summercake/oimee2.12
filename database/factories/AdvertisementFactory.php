<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Advertisement::class, function (Faker $faker) {
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'category_id' => $faker -> numberBetween($min = 1, $max = 12),
        'company_id' => $faker -> numberBetween($min = 1, $max = 100),
        'image_id' => $faker -> numberBetween($min = 1, $max = 100),
        'tag_id' => $faker -> numberBetween($min = 1, $max = 10),
        'adv_title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'adv_description' => $faker -> sentence($nbWords = 10, $variableNbWords = true),
        'adv_link' => $faker -> url,
        'adv_secondary_link' => $faker -> url,
        'adv_original_price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
        'adv_final_price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
        'adv_actual_charge_price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
        'adv_discount_rate' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1),
        'adv_promotion_code' => $faker -> randomNumber($nbDigits = NULL, $strict = false),
        'adv_start_date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'adv_valid_to_date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'adv_display_valid_to_date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
