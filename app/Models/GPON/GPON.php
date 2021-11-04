<?php

namespace App\Models\GPON;

use Illuminate\Database\Eloquent\Model;

class GPON extends Model
{
    protected $table = "gpon";
    

    protected $fillable = ['idSto','idWitel','idRegional','ipGpon','panel','slot','port','createdBy','createdTime','modifiedBy','modifiedTime', 'created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d h:i:s'
    ];
}
