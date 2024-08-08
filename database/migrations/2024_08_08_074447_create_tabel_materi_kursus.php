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
        Schema::create('tabel_materi_kursus', function (Blueprint $table) {
            $table->id('id_materi_kursus');
            $table->foreignId('id_kursus');
            $table->string('judul_materi_kursus');
            $table->text('deskripsi_materi_kursus');
            $table->text('link_materi_kursus');
            $table->timestamps();

            $table->foreign('id_kursus')->references('id_kursus')->on('tabel_kursus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_materi_kursus');
    }
};
