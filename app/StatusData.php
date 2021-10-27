<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusData extends Model
{
    protected $table = "jenisodp";

    protected $fillable = ['statusData','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
