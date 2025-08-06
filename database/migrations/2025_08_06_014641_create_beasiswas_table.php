<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_beasiswa');
            $table->string('jenis_beasiswa');
            $table->decimal('jumlah_dana', 15, 2);
            $table->date('tanggal_buka');
            $table->date('tanggal_tutup');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->text('persyaratan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};