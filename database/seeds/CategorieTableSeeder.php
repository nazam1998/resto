<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'categorie' => 'Apetizers',
        ],
        [
            'categorie' => 'Main',
        ],
        [
            'categorie' => 'Desserts',
        ]
        ]);
    }
}
