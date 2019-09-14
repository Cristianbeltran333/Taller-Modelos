<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContratistas extends Migration
{
   
    public function up()
    {
        Schema::create('contratistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('celular',50);
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('contratistas');
    }
}
