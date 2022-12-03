<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name'=> Str::random(10),
            'product_description'=> Str::random(20),
            'category_id'=> Str::random(1),
            'subcategory_id'=> Str::random(1),
            'product_status'=> 1,
        ]);
    }
}
