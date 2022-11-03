<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert([
        //     'name' => 'bread',
        //     'count' => '10',
        //     'price' => '2',
        //     'description' => 'good bread for breakfast',
        // ]);

        Product::factory(40)->create();
    }
}
