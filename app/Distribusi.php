<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table = "distribusi";

    protected $fillable = ['idOdc','idFeeder','idFtmOa','idFtmEa','idGpon','idSto','idWitel','idRegional','dis','idStatusCore','core','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
