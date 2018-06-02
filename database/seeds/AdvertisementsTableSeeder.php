<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Advertisement;
class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Advertisement::class, 100)->create();
    }
}
