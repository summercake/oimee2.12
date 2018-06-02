<?php

use Illuminate\Database\Seeder;
use App\Models\Collection;
class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Collection::class, 100)->create();
    }
}
