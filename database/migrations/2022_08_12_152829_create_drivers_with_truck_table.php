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
        Schema::create('drivers_with_truck', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')
                ->references('id')
                ->on('drivers');
            $table->unsignedBigInteger('joined_truck_id');
            $table->foreign('joined_truck_id')
                ->references('id')
                ->on('joined_trucks');
            $table->enum('is_joined_truck_assigned_to_driver', ['yes', 'no'])->default('yes');
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
        Schema::dropIfExists('drivers_with_truck');
    }
};
