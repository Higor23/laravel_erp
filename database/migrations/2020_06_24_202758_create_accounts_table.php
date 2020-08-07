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
            $table->string('name', 30);
            $table->string('bank', 30)->nullable();
            $table->float('opBalance', 10, 2);
            $table->string('agency', 10)->nullable();;
            $table->string('number', 14)->nullable();;
            $table->string('operation', 10)->nullable();;
            $table->string('phone', 11)->nullable();;
            $table->string('manager', 20)->nullable();;
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
