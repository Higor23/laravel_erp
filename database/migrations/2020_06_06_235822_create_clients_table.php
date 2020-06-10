<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome', 100);
            $table->string('Telefone_01', 11)->nullable($value = true);
            $table->string('Telefone_02', 11)->nullable($value = true);
            $table->string('Email', 100)->nullable($value = true);
            $table->string('CPF')->nullable($value = true);
            $table->string('CEP', 8)->nullable($value = true);
            $table->string('Logradouro', 150)->nullable($value = true);
            $table->string('Número', 10)->nullable($value = true);
            $table->string('Bairro', 100)->nullable($value = true);
            $table->string('Complemento', 50)->nullable($value = true);
            $table->string('Município', 50)->nullable($value = true);
            $table->string('Estado', 2)->nullable($value = true);
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
        Schema::dropIfExists('clients');
    }
}
