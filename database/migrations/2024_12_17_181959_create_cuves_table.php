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
        if (!Schema::hasTable('cuves')) {
            Schema::create('cuves', function (Blueprint $table) {
                $table->id();
                $table->string('nom_cuve');
                $table->decimal('volume_max', 10, 2);
                $table->foreignId('cuverie_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuves');
    }
};
