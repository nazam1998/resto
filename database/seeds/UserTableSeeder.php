<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        DB::table('users')->insert([
            'nom' => 'Muhammad',
            'prenom' => 'Nazam',
            'email' => 'nazam90-be@mail.com',
            'email_verified_at' => now(),
            'photo'=>'https://picsum.photos/200/300',
            'password' => Hash::make('Muhammad05031998'), // password
            'remember_token' => Str::random(10),
            'id_role' => 1,
        ]);
        // factory(User::class,20)->create();
    }
}
