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
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); 
        $this->call(RoleSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(SpecialTableSeeder::class);
        $this->call(PosteTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
