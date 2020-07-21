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
        factory(\App\user::class, 20)->create();
        factory(\App\category::class, 50)->create();
        // $this->call(UserSeeder::class);
    }
}
