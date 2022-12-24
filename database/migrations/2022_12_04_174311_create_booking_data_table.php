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
        Schema::create('booking_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendaki');
            $table->string('checkin_date');
            $table->string('checkout_date');
            $table->string('jumlah_pendaki');
            $table->string('bayar')->nullable();
            $table->timestamps();
            $table->string('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_data');
    }
};
