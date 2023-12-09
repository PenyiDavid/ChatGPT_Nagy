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
            //$table->integer("user_id")->unsigned();
            //$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            //$table->index('termek_id'); //->unsigned()->unique();
            //$table->foreign('termek_id')->references('id')->on('termekek')->onDelete('cascade');
            //$table->foreign('user_id')->references('user_id')->on('users');
            //$table->foreign('termek_id')->references('user_id')->on('termekek');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'rendelesek_user_id'
            )->onDelete('cascade');
            $table->foreignId('termek_id')->constrained(
                table: 'uj_termeks', indexName: 'rendelesek_termek_id'
            )->onDelete('cascade');
            $table->string('szallitasi_cim');
            $table->timestamps();
            //$table->timestamps();
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
