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
        Schema::create('t_link_tag', function (Blueprint $table) {
            $table->id();
            $table->integer('id_link');
            $table->unsignedBigInteger('id_tag');
            // Relasi
            $table->foreign('id_link')->references('id_link')->on('t_link')->onDelete('cascade');
            $table->foreign('id_tag')->references('id_tag')->on('t_tag')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_link_tag');
    }
};
