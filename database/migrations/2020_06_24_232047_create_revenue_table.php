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
            $table->string('documento')->nullable($value = true);;
            $table->string('categoria');
            $table->date('recebimento')->nullable($value = true);
            $table->string('tipoRecebimento')->nullable($value = true);
            $table->string('obs')->nullable($value = true);

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
