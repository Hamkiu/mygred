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
        Schema::create('maklumat_premis', function (Blueprint $table) {
            $table->string('id', 15)->primary();
            //alamat premis daripada SPBT
            $table->integer('nombakaun');
            $table->integer('nomserial')->nullable();
            $table->string('codeakaun')->nullable();
            $table->string('namamilik')->nullable();
            $table->string('namasyrkt')->nullable();
            $table->string('pdaftaran')->nullable();
            $table->string('alamatbus')->nullable();
            $table->string('telephone')->nullable();
            $table->string('rujukfail')->nullable();
            $table->string('jalancode')->nullable();
            $table->string('permitodc')->nullable();
            $table->string('nomborssm')->nullable();
            $table->decimal('latitudss', 10, 8)->nullable();
            $table->decimal('longtitud', 10, 8)->nullable();
            $table->string('jalanname')->nullable();
            $table->string('statuslsn')->nullable();
            $table->string('zonelesen')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maklumat_premis');
    }
};
