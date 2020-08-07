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
            $table->string('fantasyName', 50);
            $table->string('cpfcnpj', 14);
            $table->string('phone_01', 11);
            $table->string('phone_02', 11)->nullable();
            $table->string('email', 100)->nullable();            
            $table->string('other', 50)->nullable();
            $table->string('indState', 10)->nullable();
            $table->string('iState', 9)->nullable();
            $table->string('imunicipal', 11)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('number', 10)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('complement', 50)->nullable();
            $table->string('county', 50)->nullable();
            $table->string('state', 2)->nullable();
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
