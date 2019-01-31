<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tabel_user')->insert([
          'username' => "admin",
          'email' => "systemfive.id@gmail.com",
          'password' => bcrypt('admin'),
          'level'=>"admin"
      ]);
      DB::table('tabel_user')->insert([
          'username' => "peserta",
          'email' => "peserta@gmail.com",
          'password' => bcrypt('peserta'),
          'level'=>"peserta"
      ]);
    }
}
