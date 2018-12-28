<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class editProfil extends Model
{
    protected $table = 'users';

  // menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
  public $timestamps = false;
}