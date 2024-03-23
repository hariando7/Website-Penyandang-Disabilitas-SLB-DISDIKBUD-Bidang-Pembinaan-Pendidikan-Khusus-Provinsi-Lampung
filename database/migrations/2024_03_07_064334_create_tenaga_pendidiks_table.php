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
        Schema::create('tenaga_pendidik', function (Blueprint $table) {
            $table->id();
            $table->integer('pemilik');
            $table->integer('sekolah');
            $table->string('nama')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('nip')->nullable();
            $table->string('statusPNS')->nullable();
            $table->string('bidangPekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenaga_pendidik');
    }
};