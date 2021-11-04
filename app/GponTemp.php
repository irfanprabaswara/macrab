<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GponTemp extends Model
{
    protected $table = "gpontemp";

    protected $fillable = ['idGponTemp','ipGpon','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
