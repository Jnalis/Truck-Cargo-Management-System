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
        Schema::create('trailers', function (Blueprint $table) {
            $table->id();
            $table->string('trailer_plate_no');
            $table->string('trailer_chases_no');
            $table->string('trailer_color');
            $table->date('comesa_start_date');
            $table->date('comesa_expire_date');
            $table->string('copy_of_trailer_card');
            $table->enum('status', [
                'in use',
                'not in use',
                'under maintenance',
                'loaded with cargo',
                'on move',
                'arrived_to_destination',
            ])->default('in use');
            $table->enum('is_trailer_assigned_to_horse', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('trailers');
    }
};
