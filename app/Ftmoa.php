<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftmoa extends Model
{
    protected $table = "ftmoa";

    protected $fillable = ['idFtmOa','idFtmEa','idGpon','idSto','idWitel','idRegional','rak','panel','slot','core','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
