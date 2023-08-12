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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('noHP')->nullable();
            $table->string('resi')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('nama_produk')->nullable();
            $table->bigInteger('biaya')->nullable();
            $table->integer('paket_id')->nullable();
            $table->string('pesan_status')->nullable();
            $table->string('lat')->nullable();
            $table->string('lot')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
