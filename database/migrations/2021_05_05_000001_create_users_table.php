<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userID')->index();
            $table->string('username',20);
            $table->string('password',12);
            $table->string('level',20);
            $table->string('name',30);
            $table->string('CF_PIVA',16);
            $table->string('userAddress',30);
            $table->string('userPhone',10);
            $table->string('userMail',35);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
