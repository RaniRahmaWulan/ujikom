<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formats', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan');
            $table->string('bulan');
            $table->integer('tahun');
            // RELASI 
            $table->unsignedbigInteger('id_surat');
            $table->unsignedbigInteger('id_divisi');
            $table->foreign('id_surat')->references('id')
            ->on('surats');
            $table->foreign('id_divisi')->references('id')
            ->on('divisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formats');
    }
};
