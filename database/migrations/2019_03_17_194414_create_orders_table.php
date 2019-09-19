<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references('user_id')->on("users");
            $table->bigInteger("ticket_id_1")->unsigned();
            $table->foreign("ticket_id_1")->references('ticket_id')->on("tickets");
            $table->bigInteger("ticket_id_2")->unsigned();
            $table->foreign("ticket_id_2")->references('ticket_id')->on("tickets");
            $table->bigInteger("ticket_id_3")->unsigned();
            $table->foreign("ticket_id_3")->references('ticket_id')->on("tickets");
            $table->integer("ticket_id_1_quantity");
            $table->integer("ticket_id_2_quantity");
            $table->integer("ticket_id_3_quantity");
            $table->integer("totalOrder");
            $table->string('firstName');
            $table->string('lastName');
            $table->string('company')->nullable();
            $table->string('address');
            $table->string('apartment')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('postal');
            $table->string('phoneNumber')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
