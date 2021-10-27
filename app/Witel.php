<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witel extends Model
{
    protected $table = "witel";

    protected $fillable = ['codeWitel','namaWitel','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];

    public $timestamps = false;
}
