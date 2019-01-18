<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // este metodo sirve apra crear la tabla dinamicamente, se crean y aparecen en mysql
    // la base de datos deberia esta creada
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->mediumText('short');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // metodo alterno para borrar datos de mysql
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
