<?php

use Illuminate\Database\Seeder;
use App\Models\ContactPerson;
class ContactPersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ContactPerson::class, 100)->create();
    }
}
