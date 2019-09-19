<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->unsignedBigInteger("event_id");
            $table->foreign('event_id')->references('event_id')->on('events');
            $table->bigIncrements('testimonial_id');
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references('user_id')->on("users");
            $table->string("comment");
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
        Schema::dropIfExists('testimonial');
    }
}
