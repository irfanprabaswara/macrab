<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisOdp extends Model
{
    protected $table = "jenisodp";

    protected $fillable = ['codeJenisOdp','jenisOdp','createdBy','createdTime','modifiedBy','modifiedTime'];

    public $timestamps = false;
}
