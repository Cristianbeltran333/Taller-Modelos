<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(App\Models\Proyecto::class, function (Faker $faker) {
    return [

      'nombre_proyecto'        => $faker->name,
      'descripcion_proyecto'  => $faker->paragraph,
      'fuente_recurso'        => $faker->paragraph,
      'valor_proyecto'         => $faker->randomDigit,
      'estado_proyecto'        => $faker->name,


        'area_id' => function () {
            return factory(App\Models\Area::class)->create()->id;
        }

        
    ];
});
