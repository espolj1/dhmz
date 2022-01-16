<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installed', function (Blueprint $table) {
           // $table->primary(['id_met_station', 'id_sensors']);
            $table->id();
            $table->date('date');
            $table->foreignId('id_sensor')
                ->constrained('sensors')
                ->onDelete('cascade');
            $table->foreignId('id_met_station')
                ->constrained('meteorological_stations')
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
        Schema::dropIfExists('installed');
    }
}
