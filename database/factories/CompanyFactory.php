<?php
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory -> define(App\Models\Company::class, function (Faker $faker){
    $now = Carbon ::now() -> toDateTimeString();
    return [
        'contact_person_id' => $faker -> numberBetween($min = 1, $max = 100),
        'company_name' => $faker -> company,
        'company_address_line_1' => $faker -> streetAddress,
        'company_city' => $faker -> city,
        'company_state' => $faker -> state,
        'company_country' => $faker -> country,
        'company_zip' => $faker -> postcode,
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
