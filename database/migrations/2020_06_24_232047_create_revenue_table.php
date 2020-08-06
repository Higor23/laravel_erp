<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renevue', function (Blueprint $table) {
            $table->id();
            $table->date('vencimento');
            $table->foreignId('conta_id')->references('id')->on('accounts');
            $table->string('descricao');
            $table->float('valor');
            $table->string('documento')->nullable();;
            $table->string('categoria');
            $table->date('recebimento')->nullable();
            $table->string('tipoRecebimento')->nullable();
            $table->string('obs')->nullable();

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
        Schema::dropIfExists('renevue');
    }
}
