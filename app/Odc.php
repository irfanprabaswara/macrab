<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odc extends Model
{
    protected $table = "odc";

    protected $fillable = ['idFeeder','idFtmOa','idFtmEa','idGpon','idSto','idWitel','idRegional','inPanel','portIn','outPsKe','outPanel','portOut','codeOdc','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
