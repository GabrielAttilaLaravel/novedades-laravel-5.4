<?php

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
        App\Product::create(['name' => 'Leche', 'category_id' => 2]);
        App\Product::create(['name' => 'Agua', 'category_id' => 2]);
    }
}
