<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tickets', function (Blueprint $table) {
            $table->integerIncrements('ticketID')->index();
            
            $table->bigInteger('ticketEvent')->unsigned()->index();
            $table->foreign('ticketEvent')->references('eventID')->on('events');
            
            $table->mediumInteger('ticketTransaction')->unsigned()->index();
            $table->foreign('ticketTransaction')->references('transactionID')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tickets');
    }

}
