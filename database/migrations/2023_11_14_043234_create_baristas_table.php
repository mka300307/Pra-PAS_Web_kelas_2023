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
        Schema::create('baristas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('favorite');
            $table->text('desc');
            $table->integer('points');
            $table->date('karir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baristas');
    }
};
