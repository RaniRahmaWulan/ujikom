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
        Schema::create('investasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_surat');
            $table->integer('nomor');
            $table->text('tujuan');
            $table->text('perihal');
            $table->text('keterangan');
            // RELASI 
            $table->unsignedbigInteger('id_format');
            $table->foreign('id_format')->references('id')
            ->on('formats');
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
        Schema::dropIfExists('investasis');
    }
};

https://github.com/RaniRahmaWulan/ujikom.git
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
