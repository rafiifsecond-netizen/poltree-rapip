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
        Schema::create('t_link', function (Blueprint $table) {
            $table->integer('id_link')->autoIncrement();
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->string('nik', 50)->nullable();
            $table->string('nama_web', 150);
            $table->string('url', 255);
            $table->text('deskripsi')->nullable();
            $table->enum('role', ['Dosen', 'Tata Usaha', 'Laboran'])->nullable();
            $table->string('status', 50)->default('aktif')->nullable();
            $table->timestamp('status_checked_at')->nullable();
            $table->unsignedSmallInteger('status_http_code')->nullable();
            $table->unsignedInteger('status_response_time_ms')->nullable();
            $table->string('status_summary', 255)->nullable();
            $table->integer('hit_point')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_link');
    }
};
