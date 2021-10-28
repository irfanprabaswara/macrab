<?php

namespace App\Http\Controllers\Mancore;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

DB::enableQueryLog(); // Enable query log

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
            ->Join('ftmea', 'ftmea.idGpon', '=', 'gpon.idGpon')
            ->Join('ftmoa', function ($join) {
                $join->on('ftmoa.idGpon', '=', 'ftmea.idGpon')
                    ->where('ftmea.idFtmEa', 'ftmoa.idFtmEa');
            })
            ->Join('feeder', function ($join) {
                $join->on('feeder.idFtmOa', '=', 'ftmoa.idFtmOa')
                    ->where('ftmoa.idFtmEa', 'feeder.idFtmEa')
                    ->where('ftmoa.idGpon', 'feeder.idGpon');
            })
            ->Join('odc', function ($join) {
                $join->on('odc.idFeeder', '=', 'feeder.idFeeder')
                    ->where('feeder.idFtmOa', 'odc.idFtmOa')
                    ->where('feeder.idFtmEa', 'odc.idFtmEa')
                    ->where('feeder.idGpon', 'odc.idGpon');
            })
            ->Join('distribusi', function ($join) {
                $join->on('distribusi.idOdc', '=', 'odc.idOdc')
                    ->where('odc.idFeeder', 'distribusi.idFeeder')
                    ->where('odc.idFtmOa', 'distribusi.idFtmOa')
                    ->where('odc.idFtmEa', 'distribusi.idFtmEa')
                    ->where('odc.idGpon', 'distribusi.idGpon');
            })
            ->Join('statuscore', 'statuscore.idStatusCore', '=', 'distribusi.idStatusCore')
            ->Join('odp', function ($join) {
                $join->on('odp.idDistribusi', '=', 'distribusi.idDistribusi')
                    ->where('distribusi.idOdc', 'odp.idOdc')
                    ->where('distribusi.idFeeder', 'odp.idFeeder')
                    ->where('distribusi.idFtmOa', 'odp.idFtmOa')
                    ->where('distribusi.idFtmEa', 'odp.idFtmEa')
                    ->where('distribusi.idGpon', 'odp.idGpon');
            })
            ->select('gpon.idGpon', 'gpon.ipGpon', 'gpon.panel', 'gpon.slot', 'gpon.port', 'ftmea.rak', 'ftmea.panel', 'ftmea.slot', 'ftmea.port', 'ftmoa.rak', 'ftmoa.panel', 'ftmoa.slot', 'feeder.idStatusCore', 'feeder.lat1', 'feeder.lat2', 'feeder.long1', 'feeder.long2', 'feeder.lat3', 'feeder.long3', 'statuscore.statusCore', 'odc.odcCode', 'odc.inPanel', 'odc.portIn', 'odc.outPsKe', 'odc.outPanel', 'odc.portOut', 'distribusi.idStatusCore', 'distribusi.dis', 'distribusi.core', 'odp.idStatusData', 'odp.codeOdp', 'odp.alamatOdp', 'odp.latitude', 'odp.longitude')
            ->get();

        dd($query); // Show results of log

        // if ($query->isNotEmpty()) {
        //     $no = 1;
        //     foreach ($query as $sat) {

        //         $data[] = [
        //             'no'          => $no++,
        //             'gpon.ipGpon' => $sat->ipGpon,
        //             'gpon.panel'  => $sat->panel,
        //             'gpon.slot'   => $sat->slot,
        //             'gpon.port'   => $sat->port,
        //             'ftmea.rak'   => $sat->rak,
        //             'ftmea.panel' => $sat->panel,
        //             'ftmea.slot'  => $sat->slot,
        //             'ftmea.port'  => $sat->port,
        //             'btnEditDelete'    => '<a href="/proteksi_tower/edit_ese/' . $sat->idGpon . '" class="btn btn-xs btn-success">Edit</a> |
        //             <form action="/proteksi_tower/delete_ese/' . $sat->idGpon . '" method="POST");" style="display: inline-block;">
        //             <input type = "hidden" name  = "_method" value               = "DELETE">
        //             <input type = "hidden" name  = "_token" value                = "' . csrf_token() . '">
        //             <input type = "submit" class = "btn btn-xs btn-danger" value = "Delete">
        //             </form>',
        //         ];
        //     }
        // } else {
        //     $data = [
        //         'no'               => '',
        //         'id_section'       => '',
        //         'id_tower'         => '',
        //         'counter_ese'      => '',
        //         'foto_counter_ese' => '',
        //         'box_ese'          => '',
        //         'pita_magnetik'    => '',
        //         'down_konduktor'   => '',
        //         'bola_ese'         => '',
        //         'grounding'        => '',
        //         'keterangan'       => '',
        //         'created_at'       => '',
        //         'updated_at'       => '',
        //     ];
        // }

        // $ajax_ese = [
        //     'data' => $data
        // ];

        // return response()->json($ajax_ese, 200);
    }
}
