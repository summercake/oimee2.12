<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 100)->create();
    }
}
