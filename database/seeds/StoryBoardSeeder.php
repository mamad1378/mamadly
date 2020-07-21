<?php

use Illuminate\Database\Seeder;

class StoryBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\category::class, 20)->create();

    }
}
