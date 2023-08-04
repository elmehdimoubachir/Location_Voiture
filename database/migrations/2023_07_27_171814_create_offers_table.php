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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('Discription');
            $table->bigInteger('id_Car')->unsigned();
            $table->bigInteger('id_User')->unsigned();
            $table->timestamps();

            $table->foreign('id_Car')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('id_User')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
