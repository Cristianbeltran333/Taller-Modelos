<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class ProyectoSeeder extends Seeder
{
   

    public function run()
    {
        
   
       $areas = factory(Area::class, 5)
       ->create()
       ->each(function ($Area) {
        $Area->proyectos()->save(factory(App\Models\Proyecto::class)->make());
        });  
  // $areas = factory(Area::class, 5)->make();


    }
}
