<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration untuk tabel beasiswas
class CreateBeasiswasTable extends Migration
{
    public function up()
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->text('persyaratan')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->string('jenis')->nullable();
            $table->decimal('nominal', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('beasiswas');
    }
}

// Migration untuk tabel pendaftars
class CreatePendaftarsTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('telepon');
            $table->integer('semester');
            $table->decimal('ipk', 3, 2);
            
            // PENTING: Foreign key ke tabel beasiswa
            $table->unsignedBigInteger('beasiswa_id');
            $table->foreign('beasiswa_id')->references('id')->on('beasiswas')->onDelete('cascade');
            
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->string('file_transkrip')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_kk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftars');
    }
}

// Jika tabel sudah ada, gunakan migration untuk menambah foreign key
class AddBeasiswaIdToPendaftarsTable extends Migration
{
    public function up()
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            // Cek apakah kolom belum ada
            if (!Schema::hasColumn('pendaftars', 'beasiswa_id')) {
                $table->unsignedBigInteger('beasiswa_id')->nullable()->after('ipk');
                $table->foreign('beasiswa_id')->references('id')->on('beasiswas')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            $table->dropForeign(['beasiswa_id']);
            $table->dropColumn('beasiswa_id');
        });
    }
}