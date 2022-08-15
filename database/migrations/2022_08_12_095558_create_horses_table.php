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
        Schema::create('horses', function (Blueprint $table) {
            $table->id();
            $table->string('horse_plate_no');
            $table->string('horse_chases_no');
            $table->string('horse_color');
            $table->date('comesa_start_date');
            $table->date('comesa_expire_date');
            $table->string('copy_of_horse_card');
            $table->enum('status', [
                'in use',
                'not in use',
                'under maintenance',
                'loaded with cargo',
                'on move',
                'arrived_to_destination',
            ])->default('in use');
            $table->enum('is_trailer_attached', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('horses');
    }
};
