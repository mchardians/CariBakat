<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNikAndTempatLahirToProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('nik')->nullable(); // NIK column
            $table->string('tempat_lahir')->nullable(); // Tempat Lahir column
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['nik', 'tempat_lahir']);
        });
    }
}
