<?php

use Illuminate\Database\Seeder;

class PosteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([[
            'poste' => 'Serveur',
        ],
        [
            'poste' => 'Plongeur',
        ],
        [
            'poste' => 'Barman',
        ],
        [
            'poste' => 'Cuisinier',
        ],
        [
            'poste' => 'Chef Cuisinier',
        ],
        [
            'poste' => 'Intérimaire',
        ]
        ]);
    }
}
