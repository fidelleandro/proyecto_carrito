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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('categoria_id')->unsigned(); 
            $table->integer('stock');  
            $table->float('precio');    
            $table->string('descripcion');
            $table->string('foto');
            $table->timestamps();
            $table->foreign('categoria_id')
                       ->references('id')
                       ->on('categorias')
                       ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
