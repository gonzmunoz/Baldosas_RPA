<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_apellidos');
            $table->string('email');
            $table->integer('telefono');
            $table->string('direccion');
            $table->integer('codigo_postal');
            $table->integer('metros_cuadrados');
            $table->string('tipo_habitacion');
            $table->unsignedBigInteger('id_baldosa');
            $table->dateTime('fecha_finalizacion');
            $table->dateTime('fecha_solicitud');
            $table->boolean('validado');
            $table->boolean('aprobado');

            $table->foreign('id_baldosa')->references('id')->on('baldosas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
