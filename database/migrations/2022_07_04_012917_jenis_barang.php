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
        Schema::create('jenis_barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('harga', 100);
            $table->timestamps();
            $table->foreignId('kuota_id')->constrained('kuotas');
            $table->foreignId('pulsa_id')->constrained('pulsas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
