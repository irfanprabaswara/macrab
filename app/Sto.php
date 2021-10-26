<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sto extends Model
{
    protected $table = "sto";

    protected $fillable = ['namaSto','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];

    public $timestamps = false;
}
