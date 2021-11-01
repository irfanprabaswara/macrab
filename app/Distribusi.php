<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table = "distribusi";
    protected $primaryKey = 'idDistribusi';
    protected $fillable = ['idOdc','idFeeder','idFtmOa','idFtmEa','idGpon','idSto','idWitel','idRegional','dis','idStatusCore','core','createdBy','createdTime','modifiedBy','modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
