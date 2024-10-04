<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transactions', function (Blueprint $table) {
            $table->mediumIncrements('transactionID')->unsigned()->index();

            $table->unsignedBigInteger('transactionUser')->index();
            $table->foreign('transactionUser')->references('userID')->on('users');

            $table->float('transactionPrice');
            $table->tinyInteger('transactionsQuantity');
            $table->string('transactionMethod', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transactions');
    }

}
