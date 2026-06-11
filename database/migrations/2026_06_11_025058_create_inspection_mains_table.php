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
        Schema::create('inspection_mains', function (Blueprint $table) {
            $table->string('id', 15)->primary();
            $table->string('premis_id', 15);
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->date('tarikh_periksa');
            $table->time('masa_mula');
            $table->time('masa_tamat');
            $table->integer('bil_tempatan_lelaki');
            $table->integer('bil_tempatan_perempuan');
            $table->integer('bil_asing_lelaki');
            $table->integer('bil_asing_perempuan');
            $table->string('kursus_kendalimakanan');
            $table->string('suntikan_tifoid');
            $table->boolean('status_gt')->default(false);
            $table->boolean('surat_amaran')->default(false);
            $table->string('no_kompaun');
            $table->decimal('nilai_kompaun', 10, 2);
            $table->string('no_sijil');
            $table->decimal('markah', 10, 2);
            $table->string('gred');
            $table->boolean('status_ccp')->default(false);
            $table->boolean('tandas')->default(false);
            $table->integer('jumlah_star');
            $table->text('catatan')->nullable();
            $table->date('tarikh_tamat')->nullable();
            $table->enum('source', ['SYSTEM','ORACLE_MIGRATION'])->default('SYSTEM');

            $table->timestamps();
            $table->foreign('premis_id')->references('id')->on('maklumat_premis')->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection_mains');
    }
};
