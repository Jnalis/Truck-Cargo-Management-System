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
        Schema::create('joined_trucks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('horse_id');
            $table->foreign('horse_id')
                ->references('id')
                ->on('horses');
            $table->unsignedBigInteger('trailer_id');
            $table->foreign('trailer_id')
                ->references('id')
                ->on('trailers');
            $table->enum('joined_truck_status', [
                'in use',
                'not in use',
                'under maintenance',
                'loaded with cargo',
                'on move',
                'arrived_to_destination',
            ])->default('in use');
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
        Schema::dropIfExists('joined_trucks');
    }
};
