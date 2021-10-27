<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftmea extends Model
{
    protected $table = "ftmea";

    protected $fillable = ['idGpon','idSto','idWitel','idRegional','rak','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
