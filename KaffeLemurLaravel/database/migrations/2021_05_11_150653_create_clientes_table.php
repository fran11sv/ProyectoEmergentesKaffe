<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CLIENTES', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cli');
            $table->string('apellido_cli');
            $table->string('email_cli');
            $table->string('usuario_cli');
            $table->string('contra_cli');
            $table->string('telefono_cli');
            $table->string('direccion_cli');
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
        Schema::dropIfExists('CLIENTES');
    }
}
