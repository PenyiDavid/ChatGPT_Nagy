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
        Schema::create('rendelesek', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'rendelesek_user_id'
            )->onDelete('cascade');
            $table->foreignId('termek_id')->constrained(
                table: 'termekek', indexName: 'rendelesek_termek_id'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendelesek');
    }
};
