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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('license_no');
            $table->date('license_expire_date');
            $table->string('copy_of_license');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->enum('driver_status', [
                'idle',
                'on move',
                'arrived to destination',
                'on service'
            ])->default('idle');
            $table->enum('is_driver_assigned_with_truck', ['yes', 'no'])->default('no');

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
        Schema::dropIfExists('drivers');
    }
};
