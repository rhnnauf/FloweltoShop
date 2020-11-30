<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class flowerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower_category')->insert([
            ['categoryName' => 'Boquet','categoryImage' => 'storage/asset/1.png'],
            ['categoryName' => 'Gift','categoryImage' => 'storage/asset/2.jpg'],
            ['categoryName' => 'Single','categoryImage' => 'storage/asset/3.jpeg'],
        ]);
    }
}
