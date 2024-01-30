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
        Schema::create('trains', function (Blueprint $table){
            $table->id();
            $table->string("azienda");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->time("orario_di_partenza");
            $table->time("orario_di_arrivo");
            $table->string("codice_treno", 10)->unique();
            $table->tinyInteger("numero_carrozze")->unsigned();
            $table->boolean("in_orario")->default(0);
            $table->boolean("cancellato")->default(0);
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
