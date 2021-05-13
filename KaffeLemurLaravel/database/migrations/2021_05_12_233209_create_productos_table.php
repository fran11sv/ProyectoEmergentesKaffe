<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTOS', function (Blueprint $table) {
            $table->id();
            $table->string('id_categoria');
            $table->string('nombre_prod');
            $table->string('descripcion_prod');
            $table->decimal('precio_prod');
            $table->decimal('precio2_prod');
            $table->string('estado_prod');
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
        Schema::dropIfExists('PRODUCTOS');
    }
}
