<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('user_id');
			$table->text('caption')->nullable();
			$table->string('image')->nullable();
			$table->string('likes')->default(0)->nullable();
			$table->string('views')->default(0)->nullable();
			$table->string('status')->default(1)->comment('1-Approved,0-disapprove')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
