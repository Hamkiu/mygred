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
        Schema::create('inspection_component_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('component_id')
                  ->constrained('inspection_components')
                  ->cascadeOnDelete();
        
            $table->text('description');
        
            $table->integer('markah')->default(1);
        
            $table->integer('sort')->default(0);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_component_items');
    }
};
