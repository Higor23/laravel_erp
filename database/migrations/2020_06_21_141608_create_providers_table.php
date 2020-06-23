<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('rsocial', 50);
            $table->string('fantasia', 50);
            $table->string('cpfcnpj', 14);
            $table->string('telefone1', 11);
            $table->string('telefone2', 11)->nullable($value = true);
            $table->string('Email', 100)->nullable($value = true);
            $table->foreignId('ramo_id')->references('id')->on('industry');
            $table->string('outro', 50)->nullable($value = true);
            $table->string('indestadual', 10)->nullable($value = true);
            $table->string('iestadual', 9)->nullable($value = true);
            $table->string('imunicipal', 11)->nullable($value = true);
            $table->string('cep', 8)->nullable($value = true);
            $table->string('logradouro', 150)->nullable($value = true);
            $table->string('numero', 10)->nullable($value = true);
            $table->string('bairro', 100)->nullable($value = true);
            $table->string('complemento', 50)->nullable($value = true);
            $table->string('municipio', 50)->nullable($value = true);
            $table->string('estado', 2)->nullable($value = true);
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
        Schema::dropIfExists('providers');
    }
}
