<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeder extends Model
{
    protected $table = "feeder";
    protected $primaryKey = 'idFeeder';
    protected $fillable = ['idFtmOa','idFtmEa','idGpon','idSto','idWitel','idRegional','idStatusCore','fe','lat1','long1','lat2','long2','lat3','long3','createdBy','createdTime','modifiedBy','modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
