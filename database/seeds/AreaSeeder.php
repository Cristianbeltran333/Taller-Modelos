<?php

use Illuminate\Database\Seeder;
use App\Models\Area;
class AreaSeeder extends Seeder
{
    
    
    public function run()
    {
        {
        $areas=[
        	'contabilidad',
        	'finanzas',
        	'recursos humanos',
        	'archivos',
        	'plneacion'
    ];
foreach ($areas as $area) {
	Area::create(['nombre'=>$area]);
}
  }
    }
}
