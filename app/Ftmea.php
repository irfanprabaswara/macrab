<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftmea extends Model
{
    protected $table = "ftmea";
    protected $primaryKey = 'idFtmEa';
    protected $fillable = ['idGpon','idSto','idWitel','idRegional','rak','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
