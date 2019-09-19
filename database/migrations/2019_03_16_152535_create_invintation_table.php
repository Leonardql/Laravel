<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvintationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invintations', function (Blueprint $table) {
            $table->bigIncrements('invintation_id');
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("user_id")->on("users");
            $table->string("guestName");
            $table->string("guestNumber");
            $table->string("guestEmail");
            $table->string("guestMessage");
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
        Schema::dropIfExists('invintation');
    }
}
