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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cargo_carried_by');
            $table->foreign('cargo_carried_by')
                ->references('id')
                ->on('joined_trucks');
            $table->unsignedBigInteger('container_id');
            $table->foreign('container_id')
                ->references('id')
                ->on('containers');
            $table->unsignedBigInteger('container_consignee');
            $table->foreign('container_consignee')
                ->references('id')
                ->on('consignees');
            $table->unsignedBigInteger('container_client');
            $table->foreign('container_client')
                ->references('id')
                ->on('clients');
            $table->unsignedBigInteger('container_cleared_by');
            $table->foreign('container_cleared_by')
                ->references('id')
                ->on('clearing_agents');
            $table->string('weight_or_tons_GVM');
            $table->string('total_fuel_consumption');
            $table->date('route_date');
            $table->string('destination');
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
        Schema::dropIfExists('routes');
    }
};
