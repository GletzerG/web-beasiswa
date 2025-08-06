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
        Schema::table('beasiswas', function (Blueprint $table) {
            $table->string('jenis_beasiswa')->default('umum')->change();
            // Tambah kolom deskripsi juga
            $table->text('deskripsi')->nullable()->after('nama_beasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beasiswas', function (Blueprint $table) {
            $table->string('jenis_beasiswa')->change(); // hapus default
            $table->dropColumn('deskripsi');
        });
    }
};