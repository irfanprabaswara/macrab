<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witel extends Model
{
    protected $table = "witel";
    protected $primaryKey = 'idWitel';
    protected $fillable = ['codeWitel','namaWitel','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
