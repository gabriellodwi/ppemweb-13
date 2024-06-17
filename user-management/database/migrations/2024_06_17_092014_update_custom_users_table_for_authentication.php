<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCustomUsersTableForAuthentication extends Migration
{
    public function up()
    {
        Schema::table('custom_users', function (Blueprint $table) {
            $table->string('password')->after('email');
            $table->rememberToken()->after('password');
        });
    }

    public function down()
    {
        Schema::table('custom_users', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->dropColumn('remember_token');
        });
    }
}
