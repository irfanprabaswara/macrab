<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $table = "regional";

    protected $primaryKey = 'idRegional';

    protected $fillable = ['namaRegional','createdBy','createdTime', 'modifiedBy', 'modifiedTime'];

    const CREATED_AT = 'createdTime';
    const UPDATED_AT = 'modifiedTime';
    public $timestamps = false;
}
