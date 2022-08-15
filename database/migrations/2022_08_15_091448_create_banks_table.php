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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transporter_id');
            $table->foreign('transporter_id')
                ->references('id')
                ->on('transporters');
            $table->string('bank_name');
            $table->string('branch_name')->nullable();
            $table->string('beneficiary_name');
            $table->string('account_number');
            $table->string('address');
            $table->string('swift_code');
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
        Schema::dropIfExists('banks');
    }
};
