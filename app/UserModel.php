<?php

namespace SystemFive;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
  protected $table = 'tabel_user';
  protected $primaryKey = 'id_user';
  public $timestamps = true;
  protected $fillable = [
    'username','password','level','email'
  ];
}
