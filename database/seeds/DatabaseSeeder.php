<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Disable all mass assignment restrictions
        Model ::unguard();
        $this -> call([
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            ContactPersonsTableSeeder::class,
            ImagesTableSeeder::class,
            CompaniesTableSeeder::class,
            TagsTableSeeder::class,
            AdvertisementsTableSeeder::class,
            CollectionsTableSeeder::class,
            PostsTableSeeder::class,
            RepliesTableSeeder::class,
        ]);
        // Re enable all mass assignment restrictions
        Model ::reguard();
    }
}
