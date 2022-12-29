<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class show extends Model
{
   protected $table="database1";
   protected $fillable = ['name', 'password'];  
  public $timestamps=false;
}
