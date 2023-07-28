<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('Date_start');
            $table->date('Date_end');
            $table->double('Pric_Day');
            $table->bigInteger('id_client')->unsigned();
            $table->bigInteger('id_car')->unsigned();
            $table->bigInteger('id_driver');
            $table->timestamps();

            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_car')->references('id')->on('cars')->onDelete('cascade');

            // $table->
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
