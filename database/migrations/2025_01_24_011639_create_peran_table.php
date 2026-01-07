<!-- 
Tugas 14 - Mengatur Database dengan Migration - peran
Nama : Dhimas Luthfi Arnanda
Kelas : Laravel Web
-->
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
        Schema::create('peran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');

            $table->unsignedBigInteger('casts_id');
            $table->foreign('casts_id')->references('id')->on('casts');

            $table->string('nama_peran');
            $table->integer('jam_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
