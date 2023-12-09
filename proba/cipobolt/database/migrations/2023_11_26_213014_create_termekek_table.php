<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('termekek', function (Blueprint $table) {
            $table->id();
            $table->string('termek_neve');
            $table->integer('ar');
            $table->integer('darabszam');
            $table->integer('meret');
            $table->string('eleresi_ut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termekek');
    }
};
