<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftmoa extends Model
{
    protected $table = "ftmoa";
    protected $primaryKey = 'idFtmOa';
    protected $fillable = ['idFtmEa','idGpon','idSto','idWitel','idRegional','rak','panel','slot','core','createdBy','createdTime','modifiedBy','modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
