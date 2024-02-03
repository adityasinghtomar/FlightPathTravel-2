<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('user_id');
			$table->string('skin_type')->nullable();
			$table->string('body_type')->nullable();
			$table->string('eye_color')->nullable();
			$table->string('hair_color')->nullable();
			$table->string('height')->nullable();
			$table->string('available_for_work')->nullable();
			$table->string('price_per_hour')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
