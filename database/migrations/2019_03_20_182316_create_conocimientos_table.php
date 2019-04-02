<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConocimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('curso')->nullable();
            $table->string('porcentaje', 3)->nullable();

            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('lenguaje_id')->unsigned();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
            $table->foreign('lenguaje_id')->references('id')->on('lenguajes')->onDelete('cascade');
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
        Schema::dropIfExists('conocimientos');
    }
}
