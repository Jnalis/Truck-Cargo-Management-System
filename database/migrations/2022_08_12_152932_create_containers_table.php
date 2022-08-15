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
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->string('container_no');
            $table->string('container_type');
            $table->string('container_condition');
            $table->string('container_starting_point');
            $table->string('container_ending_point');
            $table->unsignedBigInteger('container_consignee');
            $table->foreign('container_consignee')
                ->references('id')
                ->on('consignees');
            $table->unsignedBigInteger('container_client');
            $table->foreign('container_client')
                ->references('id')
                ->on('clients');
            $table->unsignedBigInteger('container_clearing_agent');
            $table->foreign('container_clearing_agent')
                ->references('id')
                ->on('clearing_agents');
            $table->enum('to_be_returned', ['yes', 'no'])->default('yes');
            $table->enum('container_status', [
                'added',
                'loaded on truck',
                'on move',
                'arrived to destination'
            ])->default('added');
            $table->date('container_added_on');
            $table->enum('returned', ['yes', 'no'])->default('no');
            $table->date('date_returned')->nullable();
            $table->date('date_arrived_to_destination')->nullable();
            $table->date('offloading_date')->nullable();
            $table->date('date_permit_requested_for_drop_off')->nullable();
            $table->date('drop_off_date')->nullable();
            $table->date('date_EIR_sent')->nullable();
            $table->date('date_EIR_received')->nullable();
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
        Schema::dropIfExists('containers');
    }
};
