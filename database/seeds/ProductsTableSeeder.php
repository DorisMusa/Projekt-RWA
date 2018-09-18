<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //factory(App\Product::class, 20)->create();
        $products = [
            ['title' => 'Buket od svijetlo rozih ruža', 'price' => '58.20', 'quantity' => '20', 'description' => 'Buket od 40 svijetlo rozih ruža namijenjen za sve prigode od rođendana, proslava...', 'category_id' => 1, 'brand_id' => 1, 'user_id' => 3, 'file' => 'ig2.jpg'],
            ['title' => 'Buket od ružičastih ruža', 'price' => '50', 'quantity' => '20', 'description' => 'Buket načinjen od ružičastih ruža namijenjen za sve prigode', 'category_id' => 1, 'brand_id' => 1, 'user_id' => 4, 'file' => 'img1.jpg'],
            ['title' => 'Flower Box od 50 ruža', 'price' => '100', 'quantity' => '15', 'description' => 'Moderan Flower Box načinjen od 50 ruža idealan za rođendanski dar', 'category_id' => 2, 'brand_id' => 1, 'user_id' => 3, 'file' => 'box.jpg'],
            ['title' => 'Aranžman od tulipana', 'price' => '35.50', 'quantity' => '10', 'description' => 'Aranžman od rozih tulipana u staklenoj vazi', 'category_id' => 3, 'brand_id' => 2, 'user_id' => 3, 'file' => 'tulips.jpg'],
        ];

        foreach ($products as $product) {

            Product::create([
                'title' => $product['title'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
                'description' => $product['description'],
                'category_id' => $product['category_id'],
                'brand_id' => $product['brand_id'],
                'user_id' => $product['user_id'],
                'file' => $product['file']
            ]);
        }
    }
}
