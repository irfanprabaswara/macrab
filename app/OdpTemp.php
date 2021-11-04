<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OdpTemp extends Model
{
    protected $table = "odptemp";

    protected $fillable = ['idOdpTemp','codeOdp','alamatOdp','latitude','longitude','idJenisOdp','idStatusData','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
