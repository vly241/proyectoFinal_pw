<?php

use Faker\Generator as Faker;

$factory->define(model::class, function (Faker $faker) {
    return [
        'hospitalarios'=> $faker->sentence,
        'traumaticos'=>$faker->sentence,
        'psiquiatricos'=>$faker->sentence,
        'transfusiones'=>$faker->sentence,
        'farmacologicos'=>$faker->sentence,
        'toxicos'=>$faker->sentence,
        'quirurgicos'=>$faker->sentence,
        'patologicos'=>$faker->sentence,
        'gine_menarquia'=>$faker->sentence,
        'gine_ciclos'=>$faker->sentence,
        'gine_FUP'=>$faker->sentence,
        'gine_citologicos'=>$faker->sentence,
        'gine_planificacion'=>$faker->sentence,

    ];
});
