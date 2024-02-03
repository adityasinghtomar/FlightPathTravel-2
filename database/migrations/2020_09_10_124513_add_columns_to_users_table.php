<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile_no')->after('password');
            $table->string('country')->nullable()->after('mobile_no');
            $table->string('nationality')->nullable()->after('country');
            $table->string('business_category')->nullable()->after('nationality');
            $table->string('role')->nullable()->after('business_category');
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
            $table->dropColumn('mobile_no');
            $table->dropColumn('country');
            $table->dropColumn('nationality');
            $table->dropColumn('business_category');
            $table->dropColumn('role');
        });
    }
}
