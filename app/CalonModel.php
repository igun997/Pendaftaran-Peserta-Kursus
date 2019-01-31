<?php

namespace SystemFive;

use Illuminate\Database\Eloquent\Model;

class CalonModel extends Model
{
  protected $table = 'tabel_calon';
  protected $primaryKey = 'id_calon';
  public $timestamps = true;
  protected $fillable = [
    'id_user','nama_lengkap','jk','alamat'
  ];
}
