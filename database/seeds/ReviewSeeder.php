<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('reviews')->insert([
         [
           "id"=>1,
           "name"=>"Anton",
           "comment"=>"Superbra telefon, lite gammal bara",
           "grade"=> 5,
           "product_id"=>1,
           "created_at"=>date("Y-m-d H:i:s"),
           "updated_at"=>date("Y-m-d H:i:s")
         ],
         [
           "id"=>2,
           "name"=>"Johan",
           "comment"=>"Superbra telefon",
           "grade"=>3,
           "product_id"=>1,
           "created_at"=>date("Y-m-d H:i:s"),
           "updated_at"=>date("Y-m-d H:i:s")
         ]

       ]);
     }
}
