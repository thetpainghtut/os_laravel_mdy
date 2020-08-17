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
      $this->call(BrandTableSeeder::class);
      $this->call(CategoryTableSeeder::class);
      $this->call(SubcategoryTableSeeder::class);
      $this->call(RoleTableSeeder::class);
      $this->call(UserTableSeeder::class);
    }
}
