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
        Schema::create('riwayat_medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kunjungan_id');
            $table->text('diagnosa')->nullable();
            $table->text('resep')->nullable();
            $table->text('saran')->nullable();
            $table->unsignedBigInteger('created_by'); // dokter

            $table->timestamps();

            // Foreign keys
            $table->foreign('kunjungan_id')->references('id')->on('kunjungans')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('penggunas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_medis');
    }
};
