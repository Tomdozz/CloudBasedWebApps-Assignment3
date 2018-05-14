<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       DB::table('products')->insert(
       [
         [
           "id"=>1,
           "title"=>"iPhone 5s",
           "brand"=>"Apple",
           "image"=>"http:\/\/www.three.co.uk\/static\/images\/device_pages\/MobileVersion\/Apple\/iPhone_5s\/Space_Grey\/desktop\/1.jpg",
           "description"=>"Apples iPhone 5S \u00e4r uppgraderingen av iPhone 5. 5S har samma m\u00e5tt och sk\u00e4rmtyp som f\u00f6reg\u00e5ngaren, men telefonen har nu en fingeravtrycksl\u00e4sare samt ny kamera med tv\u00e5f\u00e4rgsblixt",
           "price"=>2999,
           "created_at"=>date("Y-m-d H:i:s"),
           "updated_at"=>date("Y-m-d H:i:s")
         ],
         [
           "id"=>2,
           "title"=>"Galaxy s7",
           "brand"=>"Samsung",
           "image"=>"https:\/\/www.att.com\/catalog\/en\/skus\/images\/samsung-galaxy%20s7%20edge-blue%20coral-450x350.png",
           "description"=>"Den nya generationen av Galaxy Smartphones \u00e4r h\u00e4r. Samsung Galaxy S7 och S7 Edge har den perfekta balansen mellan funktion och form.",
           "price"=>5999,
           "created_at"=>date("Y-m-d H:i:s"),
           "updated_at"=>date("Y-m-d H:i:s")
         ]
       ]);
     }
}
