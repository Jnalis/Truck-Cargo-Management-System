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
        Schema::create('transporters_tin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transporter_id');
            $table->foreign('transporter_id')
                ->references('id')
                ->on('transporters');
            $table->string('tax_identification_number_tin');
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
        Schema::dropIfExists('transporters_tin');
    }
};
