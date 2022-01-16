<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeteorologicalStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meteorological_stations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('ip_adress', 50);
            $table->char('sim_card', 25);
            $table->string('manufacturer', 50);
            $table->string('image')
                ->nullable();
            $table->foreignId('id_type')
                ->nullable()
                ->constrained('station_types')
                ->onDelete('set null');
            $table->foreignId('id_category')
                ->nullable()
                ->constrained('station_categories')
                ->onDelete('set null');
            $table->foreignId('id_city')
                ->nullable()
                ->constrained('cities')
                ->onDelete('set null');
            $table->foreignId('id_station_owner')
                ->nullable()
                ->constrained('station_owners')
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
        Schema::dropIfExists('meteorological_stations');
    }
}
