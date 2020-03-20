<?php

use Illuminate\Database\Seeder;
class SpecialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Special::class,20)->create();
    }
}
