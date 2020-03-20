<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Special;
use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Special::class, function (Faker $faker) {
    return [
        'titre'=>$faker->name,
        'description'=>$faker->text,
        'logo'=>'https://picsum.photos/200',
        'id_cat'=>Categorie::inRandomOrder()->first()->id
    ];
});
