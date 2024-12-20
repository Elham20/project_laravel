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
        Schema::create('mouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuve_id');
            $table->float('volume', 8, 2);
            $table->string('origine'); 
            $table->string('type'); 
            $table->timestamps();
            $table->foreign('cuve_id')->references('id')->on('cuves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mouts');
    }
};
