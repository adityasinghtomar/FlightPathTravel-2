<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name')->nullable();
			$table->string('days')->nullable();
			$table->string('price')->nullable();
			$table->text('description')->nullable();
			$table->string('type')->default(1)->comment('1-Monthly,2-Quarterly,3-Yearly')->nullable();
			$table->string('stream_slots')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
