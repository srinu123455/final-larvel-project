<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class show extends Model
{
   protected $table="database1";
   public   $rules = [
    'name' => 'required',
    'password' => 'required',
];
   protected $fillable = ['name', 'password'];  
  public $timestamps=false;
}
