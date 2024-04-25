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
        Schema::create('rbs', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp');
            $table->string('uci_id');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telpon');
            $table->string('kategori');
            $table->string('no_peserta');
            $table->string('klub');
            $table->string('foto_ktp');
            $table->string('asuransi');
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
        Schema::dropIfExists('rbs');
    }
};
