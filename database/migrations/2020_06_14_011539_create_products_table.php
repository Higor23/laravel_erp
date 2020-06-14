<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
            $table->float('quantidade', 10, 2);
            $table->float('preco', 10, 2);
            $table->float('custo', 10, 2);
            $table->foreignId('unidadeMedida_id')->references('id')->on('unidadesMedida');
            $table->string('codBarras')->nullable($value = true);;
            $table->string('obs', 255)->nullable($value = true);;
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
        Schema::dropIfExists('products');
    }
}
