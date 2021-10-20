<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    const TABLE = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nik', 'email', 'contact', 'regional', 'witel', 'password', 'address', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d h:i:s',
    ];


    /**
     * @param mixed $id
     *
     * @return [mendapatkan id users]
     */
    public static function getRowId($id)
    {
        $query = DB::table('users')
            ->select('users.*')
            ->where([
                ['users.id', '=', $id],
            ])
            ->orderBy('users.id', 'desc')
            ->first();

        $data = $query;

        return $data;
    }


    /**
     * @param mixed $params
     * @param mixed $id
     *
     * @return [update data pada users]
     */
    public static function updateBy($params, $id){
        $query = DB::table(self::TABLE);
        $query->where('id', $id);
        $query->update($params['update']);
        $result = $query;
        $data = $result;
        return $data;
    }
}
