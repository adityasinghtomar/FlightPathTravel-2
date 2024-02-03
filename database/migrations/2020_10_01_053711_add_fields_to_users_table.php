<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('otp')->nullable()->after('role');
            $table->string('is_otp_varified')->nullable()->after('otp');
            $table->string('is_varified')->nullable()->after('is_otp_varified');
            $table->string('fcm_api_key')->nullable()->after('is_varified');
            $table->string('fcm_id')->nullable()->after('fcm_api_key');
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
            $table->dropColumn('otp');
            $table->dropColumn('is_otp_varified');
            $table->dropColumn('is_varified');
            $table->dropColumn('fcm_api_key');
            $table->dropColumn('fcm_id');
        });
    }
}
