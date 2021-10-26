<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $table = "regional";

    protected $fillable = ['namaRegional','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];

    public $timestamps = false;
}
