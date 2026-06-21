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
        Schema::create('inspection_answers', function (Blueprint $table) {
            $table->id();
            $table->string('main_id', 15);
            
            // component
            $table->foreignId('component_id')->nullable()->constrained('inspection_components')->nullOnDelete();

            // sub item
            $table->foreignId('component_item_id')->nullable()->constrained('inspection_component_items')->nullOnDelete();

            // jawapan
            $table->boolean('is_patuh')->nullable();
            // markah diperolehi
            $table->integer('markah_diperolehi')->default(0);
            // demerit
            $table->integer('demerit')->default(0);
            // remark pegawai
            $table->text('catatan')->nullable();

            $table->timestamps();
            $table->foreign('main_id')->references('id')->on('inspection_mains')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_answers');
    }
};
