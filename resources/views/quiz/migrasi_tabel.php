<!-- 
Tabel game

php artisan make:migration create_game_table 
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
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('gameplay');
            $table->string('developer');
            $table->integer('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};
/*
php artisan migrate
*/

/* 
Tabel platform

php artisan make:migration create_platform_table 
*/
//<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*public function up(): void
    {
        Schema::create('platform', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->references('id')->on('game');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    /*public function down(): void
    {
        Schema::dropIfExists('platform');
    }
};
/*
php artisan migrate
*/



