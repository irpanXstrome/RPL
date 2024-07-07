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
//        Kandidat {
//        id [auto increment]
//        no_kandidat [int]
//        nama [foreign key: Mahasiswa.nim]
//        visi [text]
//        misi [text]
//        role [enum: ketua/wakil]
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('candidate_id');
            $table->foreignId('nim');
            $table->text('visi');
            $table->text('misi');
            $table->enum('role',[0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
