<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato;
use Faker\Generator as Faker;

$factory->define(App\Models\Contrato::class, function (Faker $faker) {
    return [
      
     'nombre_contrato'        => $faker->name,
     'tipo_contrato'          => $faker->name,
     'modalidad_contratacion' => $faker->name,
     
    ];
});
