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
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->increments('pasien_id');
            $table->foreignId('pasien_id_user')->nullable();
            $table->foreignId('pasien_id_gol')->nullable();
            $table->string('pasien_no', 20);
            $table->string('pasien_nama', 50);
            $table->string('pasien_alamat');
            $table->string('pasien_hp', 20);
            $table->string('pasien_ktp', 50)->nullable();
            $table->string('pasien_aktif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pasien');
    }
};
