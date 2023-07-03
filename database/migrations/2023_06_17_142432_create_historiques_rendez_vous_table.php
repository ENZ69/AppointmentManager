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
        Schema::create('historiques_rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->string('statut_precedent');
            $table->string('statut_actuel');
            $table->dateTime('date_modification');
            $table->unsignedBigInteger('rendez_vous_id')->unsigned();
            $table->timestamps();

            $table->foreign('rendez_vous_id')->references('id')->on('rendez_vous');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiques_rendez_vous');
    }
};
