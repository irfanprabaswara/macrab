<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistribusiTemp extends Model
{
    protected $table = "distribusitemp";

    protected $fillable = ['idDistribusiTemp','idStatusCore','dis','core','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
