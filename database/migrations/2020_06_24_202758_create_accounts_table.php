<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->string('banco', 30)->nullable($value = true);
            $table->float('saldoinicial', 10, 2);
            $table->string('agencia', 10)->nullable($value = true);;
            $table->string('numero', 14)->nullable($value = true);;
            $table->string('operacao', 10)->nullable($value = true);;
            $table->string('telefone', 11)->nullable($value = true);;
            $table->string('gerente', 20)->nullable($value = true);;
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
        Schema::dropIfExists('accounts');
    }
}
