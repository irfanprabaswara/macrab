<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeederTemp extends Model
{
    protected $table = "feedertemp";

    protected $fillable = ['idFeederTemp','lat1','long1','lat2','long2','lat3','long3','idStatusCore','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
