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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kecepatan');
            $table->string('device');
            $table->bigInteger('biaya');
            $table->string('deskripsi');
            $table->bigInteger('category_id');
            // $table->enum('kategori',['business','design','development','seo','marketing']);
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
        Schema::dropIfExists('pakets');
    }
};
