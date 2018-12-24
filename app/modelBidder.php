<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelBidder extends Model
{
    protected $table = 'bidder';

  // menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
  public $timestamps = false;
}
