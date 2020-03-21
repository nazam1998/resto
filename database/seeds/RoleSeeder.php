<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([[
            'role' => 'Admin',
        ],
        [
            'role' => 'Utilisateur',
        ],
        [
            'role' => 'Membre',
        ],
        [
        'role' => 'Serveur',
        ],
        [
            'role' => 'Plongeur',
        ],
        [
            'role' => 'Barman',
        ],
        [
            'role' => 'Cuisinier',
        ],
        [
            'role' => 'Chef Cuisinier',
        ],
        [
            'role' => 'Intérimaire',
        ]
        ]);
    }
}
