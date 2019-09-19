<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger("event_id");
            $table->foreign('event_id')->references('event_id')->on('events');
            $table->bigIncrements('ticket_id');
            $table->string("title");
            $table->integer("price");
            $table->integer("persons_allowed");
            $table->integer("hour_limitation");
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
        Schema::dropIfExists('ticket');
    }
}
