<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);


        factory(\App\Category::class, 10)->create();
        factory(\App\Supplier::class, 20)->create();
        factory(\App\Product::class, 50)->create();
    }
}
