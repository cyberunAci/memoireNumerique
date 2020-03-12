<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesSeeder::class,
            Media_TypeSeeder::class,
            Memoire_StatusSeeder::class,
            TestMediaSeeder::class,
            TestMemoireSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
