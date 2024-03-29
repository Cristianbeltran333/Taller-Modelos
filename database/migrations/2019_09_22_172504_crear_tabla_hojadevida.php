<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHojadevida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojadevida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento',150);
            $table->integer('contratista_id')->unsigned();

            $table->foreign('contratista_id')->references('id')
            ->on('contratistas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hojadevida');
    }
}
