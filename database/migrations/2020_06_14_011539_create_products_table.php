<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->float('quantidade', 10, 2);
            $table->float('preco', 10, 2);
            $table->float('custo', 10, 2);
            $table->foreignId('unidadeMedida_id')->references('id')->on('measures');
            $table->string('codBar')->nullable($value = true);;
            $table->string('obs', 255)->nullable($value = true);;
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
