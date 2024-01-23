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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->id("Azienda");
            $table->id("Stazione di partenza");
            $table->id("Stazione di arrivo");
            $table->id("Orario di partenza");
            $table->id("Orario di arrivo");
            $table->id("Codice Treno");
            $table->id("Numero Carrozze");
            $table->id("In orario");
            $table->id("Cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
