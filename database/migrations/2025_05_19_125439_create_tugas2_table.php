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
        Schema::create('tugas2', function (Blueprint $table) {
            $table->id('kodemapel');
            $table->string('nama_mapel');
            $table->string('nama_tugas');
            $table->date('tempo');
            $table->enum('pengerjaan',['belum_selesai','selesai','dalam_pengerjaan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas2');
    }
};
