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
        Schema::create('route_costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')
                ->references('id')
                ->on('routes');
            $table->string('total_fuel_consumption_cost');
            $table->string('millage_cost');
            $table->string('container_rotation_cost');
            $table->string('service_cost');
            $table->string('route_extra_cost')->default(0);
            $table->string('route_charges');
            $table->string('route_total_cost');
            $table->string('route_profit_loss');
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
        Schema::dropIfExists('route_costs');
    }
};
