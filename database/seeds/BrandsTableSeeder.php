<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(App\Brand::class, 5)->create();
        $brands = ['Ruža', 'Tulipan', 'Orhideja', 'Božur'];

        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }
    }
}
