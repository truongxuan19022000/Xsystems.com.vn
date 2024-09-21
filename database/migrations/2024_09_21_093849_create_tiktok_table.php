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
        Schema::create('tiktoks', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->tinyInteger('network')->nullable()->default(0);
            $table->integer('view')->default(0);
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0: default, 1: running, 2: completed');
            $table->double('price')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktok');
    }
};
