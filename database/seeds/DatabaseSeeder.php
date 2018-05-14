<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ProductStoreSeeder::class);
        $this->call(ProductReviewSeeder::class);
    }
}
