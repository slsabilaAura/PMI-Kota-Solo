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
        Schema::create('jenis_kejadian', function (Blueprint $table) {
            $table->id('id_jeniskejadian');
            $table->enum('nama_kejadian', ['Banjir', 'Tanah Longsor', 'Gunung Meletus', 'Pohon Tumbang', 'Gempa Bumi', 'Tsunami']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kejadian');
    }
};
