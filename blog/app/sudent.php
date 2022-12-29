<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sudent extends Model
{
    protected $table="studentdata";
   protected $fillable = ['name', 'age','gender','Address'];  
  public $timestamps=false;
}
