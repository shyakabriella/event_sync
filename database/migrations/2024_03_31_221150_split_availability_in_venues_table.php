<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SplitAvailabilityInVenuesTable extends Migration
{
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn('availability'); // Remove the old availability column
            $table->date('availability_start')->nullable()->after('booking_policy'); // Add start date
            $table->date('availability_end')->nullable()->after('availability_start'); // Add end date
        });
    }

    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn(['availability_start', 'availability_end']);
            $table->string('availability')->nullable(); // Optionally restore the old column
        });
    }
}
