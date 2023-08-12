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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email');
            // $table->string('noHP');
            $table->string('nama_produk');
            $table->bigInteger('biaya');
            $table->string('kecepatan');
            $table->string('device');
            // $table->string('alamat');
            $table->integer('paket_id');
            // $table->integer('user_id');
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
        Schema::dropIfExists('carts');
    }
};
