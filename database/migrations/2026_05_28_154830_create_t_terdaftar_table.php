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
        Schema::create('t_terdaftar', function (Blueprint $table) {
        $table->integer('id')->autoIncrement();
        $table->integer('id_kategori');
        $table->integer('id_link');

        // Relasi
        $table->foreign('id_kategori', 'fk_terdaftar_kategori')
                ->references('id_kategori')->on('t_kategori')
                ->onUpdate('cascade')->onDelete('cascade');

        $table->foreign('id_link', 'fk_terdaftar_link')
                ->references('id_link')->on('t_link')
                ->onUpdate('cascade')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_terdaftar');
    }
};
