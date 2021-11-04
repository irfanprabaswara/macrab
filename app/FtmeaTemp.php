<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FtmeaTemp extends Model
{
    protected $table = "ftmeatemp";

    protected $fillable = ['idFtmEaTemp','rak','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
