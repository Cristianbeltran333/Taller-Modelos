<?php

use Illuminate\Database\Seeder;
use App\Models\Contrato;

class ContratoSeeder extends Seeder
{
  
         public function run()
    {
        factory(Contrato::class, 10)->create();
  }
 }

