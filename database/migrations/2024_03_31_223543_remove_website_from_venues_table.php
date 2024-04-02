<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveWebsiteFromVenuesTable extends Migration
{
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn('website');
        });
    }

    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->string('website')->nullable();
        });
    }
}
