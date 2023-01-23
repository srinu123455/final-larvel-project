<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
     protected $table="HRREQ";
   
   public static $createRules = [
    'RequestType' => 'required',
    'RequestDetails' => 'required',
     'AddFile' => 'required',
];

   protected $fillable = ['RequestType', 'RequestDetails','AddFile'];  
  public $timestamps=false;
}
