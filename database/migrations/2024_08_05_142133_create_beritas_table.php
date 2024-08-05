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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->dateTime('tanggal')->nullable();
            $table->string('subjudul');
            $table->string('foto_utama', 255)->nullable();
            $table->text('article');
            $table->string('foto_1', 255)->nullable();
            $table->string('foto_2', 255)->nullable();
            $table->string('foto_3', 255)->nullable();
            $table->string('foto_4', 255)->nullable();
            $table->string('foto_5', 255)->nullable();
            $table->string('foto_6', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
