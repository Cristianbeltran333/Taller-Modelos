<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContratistasContratos extends Migration
{
    
    public function up()
    {
        Schema::create('contratistas_contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('objeto_contrato',100);
            $table->string('sueldo',100);
            $table->string('regimen_contratacion',75);
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('periodo_pago',50);
            $table->string('nombre_contrato',100);
            $table->string('estado_contrato',100);
            $table->integer('contratista_id')->unsigned();
            $table->integer('contrato_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->foreign('contratista_id')
            ->references('id')
            ->on('contratistas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('contrato_id')
            ->references('id')
            ->on('contratos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('contratistas_contratos');
    }
}