<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FtmoaTemp extends Model
{
    protected $table = "ftmoatemp";

    protected $fillable = ['idFtmOaTemp','rak','panel','slot','core','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
