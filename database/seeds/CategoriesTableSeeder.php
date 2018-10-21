<?php

use Illuminate\Database\Seeder;
use CodeShopping\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeShopping\Models\Category::class,5)->create();
    }
}
