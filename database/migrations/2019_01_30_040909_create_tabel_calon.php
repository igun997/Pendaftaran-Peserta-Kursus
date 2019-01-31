<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelCalon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_calon', function (Blueprint $table) {
          $table->increments('id_calon');
          $table->unsignedInteger('id_user');
          $table->string('nama_lengkap',100);
          $table->enum('jk',["laki-laki","perempuan"]);
          $table->longText('alamat');
          $table->timestamps();
          $table->foreign('id_user')->references('id_user')->on('tabel_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_calon');
    }
}
