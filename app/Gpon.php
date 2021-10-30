<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpon extends Model
{
    protected $table = "gpon";

    // protected $primaryKey = 'idGpon';
    protected $fillable = ['idSto','idWitel','idRegional','ipGpon','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];

    // const CREATED_AT = 'createdTime';
    // const UPDATED_AT = 'createdTime';
    public $timestamps = false;
}
