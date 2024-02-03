<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveStreamingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_streamings', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('user_id')->nullable();
			$table->string('booking_slot_id')->nullable();
			$table->string('start_time')->nullable();
			$table->string('end_time')->nullable();
			$table->string('views')->nullable();
			$table->string('likes')->nullable();
			$table->string('status')->default(1)->comment('1-Booked,2-Streaming,3-Completed')->nullable();
			$table->string('booking_date')->nullable();
			$table->string('stream_date')->nullable();
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
        Schema::dropIfExists('live_streamings');
    }
}
