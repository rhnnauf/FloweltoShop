<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class flowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flower')->insert([
            ['price' => '700000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Edelweis Boquet.jpg', 'name'=>'Edelweis Boquet', 'CategoryID'=>1],
            ['price' => '700000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Daisy Boquet.jpg', 'name'=>'Daisy Boquet', 'CategoryID'=>1],
            ['price' => '300000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Sunflower Boquet.jpg', 'name'=>'Sunflower Boquet', 'CategoryID'=>1],
            ['price' => '500000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Pink Roses Boquet.jpg', 'name'=>'Pink Rose', 'CategoryID'=>1],
            ['price' => '300000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Daisy Gift.jpg', 'name'=>'Daisy Gift', 'CategoryID'=>2],
            ['price' => '300000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Sunflower Gift.jpg', 'name'=>'Sunflower Gift', 'CategoryID'=>2],
            ['price' => '400000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Pink Gift Flower.jpg', 'name'=>'Pink Flower', 'CategoryID'=>2],
            ['price' => '100000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Rose.jpg', 'name'=>'Rose', 'CategoryID'=>3],
            ['price' => '200000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Daisy Single.png', 'name'=>'Daisy', 'CategoryID'=>3],
            ['price' => '50000','desc' => 'This is a good flower', 'flowerImage' => 'storage/asset/Sunflower Single.jpg', 'name'=>'Sunflower', 'CategoryID'=>3],
        ]);
    }

    
}
