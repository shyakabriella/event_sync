<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('password', 255)->nullable(); // Add nullable if password might not be set initially
        });
    }

    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->dropColumn('password');
        });
    }
};
