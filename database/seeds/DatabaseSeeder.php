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
        $this->call(UserSeeder::class);
        $this->call(articleSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(feedSeeder::class);
        $this->call(storySeeder::class);
        $this->call(category_feedSeeder::class);
        $this->call(story_boardSeeder::class);
    }
}
