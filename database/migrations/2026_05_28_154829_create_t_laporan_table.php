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
        Schema::create('t_laporan', function (Blueprint $table) {
        $table->integer('id_laporan')->autoIncrement();
        $table->integer('nik_pelapor');
        $table->enum('jenis_laporan', ['Penambahan Link', 'Masalah Website', 'Masalah Akun', 'Lainnya']);
        $table->text('isi_laporan');

        // Relasi
        $table->foreign('nik_pelapor', 'fk_laporan_pengguna')
                ->references('nik')->on('t_pengguna')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_laporan');
    }
};
