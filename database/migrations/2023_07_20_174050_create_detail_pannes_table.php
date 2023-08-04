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
        Schema::create('detail_pannes', function (Blueprint $table) {
            $table->id();
            $table->double('Quantite');
            $table->bigInteger('id_Facture')->unsigned();
            $table->bigInteger('id_Panne')->unsigned();
            $table->timestamps();

            $table->foreign('id_Facture')->references('id')->on('factures')->onDelete('cascade');
            $table->foreign('id_Panne')->references('id')->on('pannes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pannes');
    }
};
