<?php

namespace App\StatusCore;

use Illuminate\Database\Eloquent\Model;

class StatusCore extends Model
{
    protected $table = "statuscore";

    protected $fillable = [
        'idStatusCore', 'statusCore', 'createdBy','createdTime','modifiedBy','modifiedTime'
    ];
}
