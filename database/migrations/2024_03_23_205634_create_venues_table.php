<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->integer('capacity')->nullable();
            $table->text('contact_info')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->text('amenities')->nullable(); 
            $table->text('images')->nullable(); 
            $table->string('website')->nullable();
            $table->text('booking_policy')->nullable();
            $table->text('availability')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
