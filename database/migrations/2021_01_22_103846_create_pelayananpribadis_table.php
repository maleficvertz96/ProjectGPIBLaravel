<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelayananpribadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayananpribadis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('telpon')->nullable();
            $table->enum('status',['Belum Dilayani','Sudah Dilayani'])->nullable();
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
        Schema::dropIfExists('pelayananpribadis');
    }
}
