<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVenuesTable extends Migration
{
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('booking_policy');
            $table->string('email')->after('name')->nullable();  // Adding email after name
        });
    }

    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->text('booking_policy')->nullable();
            $table->dropColumn('email');  // Removing the email column if rolling back
        });
    }
}
