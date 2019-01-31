<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyTabelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('tabel_user', function (Blueprint $table) {
        $table->dropColumn('username');
        $table->dropColumn('email');
      });
      Schema::table('tabel_user', function (Blueprint $table) {
        $table->string('username',10)->unique();
        $table->string('email',100)->unique();
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
}
