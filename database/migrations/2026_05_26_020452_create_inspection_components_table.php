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
        Schema::create('inspection_components', function (Blueprint $table) {
            $table->id();

            $table->foreignId('section_id')
                ->constrained('inspection_sections')
                ->cascadeOnDelete();

            $table->string('code')->unique();
            $table->string('name');

            $table->text('catatan')->nullable();
            //kalau komponen direct markah
            $table->integer('markah')->nullable();
            //kalau ada sub item
            $table->boolean('has_items')->default(false);

            $table->integer('sort')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_components');
    }
};
