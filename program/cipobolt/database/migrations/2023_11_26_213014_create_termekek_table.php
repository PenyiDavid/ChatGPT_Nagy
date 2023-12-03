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
<<<<<<< HEAD
            $table->string('eleres');
            $table->int('ar');
=======
            $table->integer('ar');
>>>>>>> 36e967d4f8519657c232d0a79e702a727a8f170f
            $table->string('Meret');
            $table->integer('darabszam');
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
