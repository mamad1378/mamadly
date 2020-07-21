<?php

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
