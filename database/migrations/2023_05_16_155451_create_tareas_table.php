<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proyectos_id')->unsigned();
            $table->foreign('proyectos_id')->references('id')->on('proyectos');
            $table->string('nombre_tarea');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado_tarea');
            $table->string('descripcion_tarea');
            $table->string('miembros_tarea');
            $table->string('prioridad_tarea');
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
        Schema::dropIfExists('tareas');
    }
};
