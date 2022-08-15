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
        Schema::create('route_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')
                ->references('id')
                ->on('routes');
            $table->enum('completion_status', [
                'complete',
                'not complete'
            ])->default('not complete');
            $table->date('route_complete_on');
            $table->enum('is_route_paid', ['yes', 'no'])->default('no');
            $table->date('route_paid_on');
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
        Schema::dropIfExists('route_status');
    }
};
