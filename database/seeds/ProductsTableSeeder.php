<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'tee shirt long sleeves',
            'slug' => 'teeslongsleeves',
            'description' => '50% coton - 50% poluester. fit normally, long sleeves',
            'price' => 39,
        ]);
        Product::create([
            'name' => 'basic tee shirt',
            'slug' => 'basictees',
            'description' => '50% coton - 50% poluester. fit normally, short sleeves',
            'price' => 39,
        ]);
        Product::create([
            'name' => 'hoodie',
            'slug' => 'hoodie',
            'description' => '50% coton - 50% poluester. fit normally, hoodie',
            'price' => 39,
        ]);
    }
}
