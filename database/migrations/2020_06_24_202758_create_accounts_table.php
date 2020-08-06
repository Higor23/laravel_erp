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
            $table->string('banco', 30)->nullable();
            $table->float('saldoinicial', 10, 2);
            $table->string('agencia', 10)->nullable();;
            $table->string('numero', 14)->nullable();;
            $table->string('operacao', 10)->nullable();;
            $table->string('telefone', 11)->nullable();;
            $table->string('gerente', 20)->nullable();;
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
