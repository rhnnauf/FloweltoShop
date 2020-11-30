<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["username"=>"Manager1","email"=>"manager@gmail.com","password"=>bcrypt("111111111"),"gender"=>"1","address"=>"Jl. Pegangsaan Timur","DoB"=>"2000-01-01","role"=>1],
            ["username"=>"Nathan","email"=>"nathan@gmail.com","password"=>bcrypt("111111111"),"gender"=>"1","address"=>"Jl. Pegangsaan Barat","DoB"=>"2001-02-03","role"=>0]
            ]);
    }
   
}
