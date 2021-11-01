<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sto extends Model
{
    protected $table = "sto";
    protected $primaryKey = 'idSto';
    protected $fillable = ['namaSto','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];
    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
