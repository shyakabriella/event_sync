<?php

// Example path: database/migrations/xxxx_xx_xx_xxxxxx_create_tickets_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('seat_type'); 
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
