<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Area;
use Faker\Generator as Faker;

$factory->define(App\Models\Area::class, function (Faker $faker) {
    return [
        
     'nombre'   => $faker->name,
     'dato'    => [
     
        "fecha_inicial" => $faker->date($format = 'Y-m-d', $max = 'now'),
         "ubicacion"    => $faker->country,
          "direccion"   => $faker->address,
           "proyecto"   => $faker->paragraph
           ]
     

    ];
});
