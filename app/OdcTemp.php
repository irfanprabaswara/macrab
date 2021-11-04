<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OdcTemp extends Model
{
    protected $table = "odctemp";

    protected $fillable = ['idOdcTemp','inPanel','portIn','outPsKe','outPanel','portOut','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
