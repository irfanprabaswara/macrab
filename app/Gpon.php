<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpon extends Model
{
    protected $table = "gpon";

    protected $fillable = ['idSto','idWitel','idRegional','ipGpon','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
