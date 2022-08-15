<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_usage', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('petrol_station_id');
            $table->foreign('petrol_station_id')
                ->references('id')
                ->on('petrol_stations');
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')
                ->on('drivers');
            $table->unsignedBigInteger('joined_truck_id');
            $table->foreign('joined_truck_id')
                ->references('id')
                ->on('joined_trucks');
            $table->string('destination');
            $table->string('diesel_in_liters');
            $table->date('date_of_refueling');
            $table->string('price_per_liter');
            $table->string('total_price_for_the_liters');
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
        Schema::dropIfExists('fuel_usage');
    }
};
