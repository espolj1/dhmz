<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('streat', 50);
            $table->string('streat_number', 10);
            $table->char('phone', 10);
            $table->string('email')->unique();
            $table->foreignId('id_city')
                ->constrained('cities')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station_owners');
    }
}
