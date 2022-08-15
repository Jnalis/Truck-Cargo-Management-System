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
        Schema::create('transporters_nif_rc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transporter_id');
            $table->foreign('transporter_id')
                ->references('id')
                ->on('transporters');
            $table->string('transporter_nif');
            $table->string('transporter_rc');
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
        Schema::dropIfExists('transporters_nif_rc');
    }
};
