<?php

use Illuminate\Database\Seeder;

class ProductStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
      {
            DB::table('product_store')->insert([
              [
                'product_id'=> 1,
                'store_id'=> 1,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
              ],
              [
                'product_id'=> 2,
                'store_id'=> 1,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
              ],
              [
                'product_id'=> 1,
                'store_id'=> 2,
                "created_at"=>date("Y-m-d H:i:s"),
                "updated_at"=>date("Y-m-d H:i:s")
              ],
            ]);
      }
}
