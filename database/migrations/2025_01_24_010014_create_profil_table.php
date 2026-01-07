<!-- 
Tugas 14 - Mengatur Database dengan Migration - profil
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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->integer('umur');
            $table->string('bio');
            $table->string('alamat');
            $table->unsignedBigInteger('user_id');
 
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
