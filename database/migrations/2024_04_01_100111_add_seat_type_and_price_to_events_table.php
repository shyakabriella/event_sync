<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('events', function (Blueprint $table) {
        $table->string('seat_type')->nullable();
        $table->decimal('seat_price', 8, 2)->nullable();
    });
}

public function down()
{
    Schema::table('events', function (Blueprint $table) {
        $table->dropColumn(['seat_type', 'seat_price']);
    });
}

};
