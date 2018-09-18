<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(App\Category::class, 5)->create();

        $categories = ['Buketi', 'Flower Box', 'Aranžmani'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
