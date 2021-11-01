<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odp extends Model
{
    protected $table = "odp";
    protected $primaryKey = 'idOdp';
    protected $fillable = ['idDistribusi','idOdc','idFeeder','idFtmOa','idFtmEa','idGpon','idSto','idJenisOdp','idWitel','idStatusData','idRegional','codeOdp','alamatOdp','latitude','longitude','createdBy','createdTime','modifiedBy','modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
