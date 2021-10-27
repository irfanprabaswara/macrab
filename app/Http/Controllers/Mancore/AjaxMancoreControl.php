<?php

namespace App\Http\Controllers\Mancore;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxMancoreControl extends Controller
{
    /**
     * created by faiz on 2021-10-26 22:26:25
     *
     * *ajax mendapatkan nilai dari tabel mancore
     *
     * @return json
     */
    public function get_ajax_mancore()
    {
        $query = DB::table('gpon')
            ->Join('ftmea', 'gpon.idGpon', 'ftmea.idGpon')
            ->Join('tower', 'tower_ese.id_tower', 'tower.id')
            ->select('section.nama_section', 'tower.nama_tower', 'tower_ese.*')
            ->whereNull(
                'tower_ese.deleted_at'
            )
            ->whereNull(
                'section.deleted_at'
            )
            ->orderBy('id', 'desc')
            ->get();
    }
}
