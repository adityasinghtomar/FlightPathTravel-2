<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTermsColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('accept_terms')->after('fcm_id')->nullable();
            $table->text('description')->after('accept_terms')->nullable();
            $table->string('insta_id')->after('description')->nullable();
            $table->string('snapchat_id')->after('insta_id')->nullable();
            $table->string('user_image')->after('password')->nullable();
            $table->string('profile_likes')->after('user_image')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('accept_terms');
            $table->dropColumn('description');
            $table->dropColumn('insta_id');
            $table->dropColumn('snapchat_id');
            $table->dropColumn('user_image');
            $table->dropColumn('profile_likes');
        });
    }
}
