<?php

namespace App\Http\Controllers\MyTickets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MyTicketsController extends Controller
{
    public function get_mytickets()
    {
        $user_name = Auth::user()->name;
        // var_dump($user_name);
        $is_admin = Auth::user()->is_admin;
        $tiketUser = DB::table('tiket')
                ->leftJoin('statustiket', 'tiket.idStatusTiket', '=', 'statustiket.idStatusTiket')
                ->leftJoin('odp', 'tiket.idOdp', '=', 'odp.idOdp')
                ->leftJoin('odc', 'tiket.idOdc', '=', 'odc.idOdc')
                ->leftJoin('gpon', 'tiket.idGpon', '=', 'gpon.idGpon')
                ->leftJoin('ftmoa', 'tiket.idFtmOa', '=', 'ftmoa.idFtmOa')
                ->leftJoin('sto', 'odp.idSto', '=', 'sto.idSto')
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy as user_name','statustiket.deskripsiStatus','odp.*','odc.*','gpon.*','ftmOa.*','sto.codeSto')
                ->when($is_admin==0,function($q) use ($user_name){
                    $q->where('tiket.createdBy', '=', $user_name);
                })
                ->get();

                return view('myticket\update_data',['tiketUser' => $tiketUser]);
    }
    
    public function get_list_tickets_admin()
        {
            $tiketUser = DB::table('tiket')
                ->join('statustiket', 'tiket.idStatusTiket', '=', 'statustiket.idStatusTiket')
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy','statustiket.deskripsiStatus')
                ->get();
    
                return view('sto',['tiketUser' => $tiketUser]);
        
        // menampilkan list tickets 
        // query: select dari all table 
    }

    public function get_details_ticket_admin()
    { 
        // $approve_tiket = DB::table('tiket')
        //       ->where('idTiket', 3)
        //       ->update(['idStatus' => 1]);

        //       return view('tiket',['tiketUser' => $approve_tiket);
    }

    public function post_approve($idTiket)
    { 
        DB::table("tiket")
        ->where('idTiket', $idTiket)
        ->update(['idStatusTiket' => 1]);

        $idOdp = $this->getIdOdpFromTicket($idTiket);
        $odp = $this->getOdpById($idOdp);

        if(isset($odp)){
            $this->insertToOdpTemp($odp);
        }

        return redirect('/mytickets');

    }

    public function post_decline($idTiket)
    {
        DB::table("tiket")
        ->where('idTiket', $idTiket)
        ->update(['idStatusTiket' => 2]);

        $idOdp = $this->getIdOdpFromTicket($idTiket);
        $odp = $this->getOdpById($idOdp);

        if(isset($odp)){
            DB::table("odp")
            ->where('idOdp', $idOdp)
            ->update(['codeOdp' => '']);
            $this->insertToOdpTemp($odp);
        }

        return redirect('/mytickets');
    }

    public function getIdOdpFromTicket($idTiket){
        $tiket=DB::table("tiket")
        ->where('idTiket', $idTiket)
        ->first();

        return $tiket->idOdp;
    }

    public function getOdpById($idOdp){
        $odp=DB::table("odp")
        ->where('idOdp', $idOdp)
        ->first();

        return $odp;
    }

    public function insertToOdpTemp($odp){
        $odpTemp = (array) $odp;
        $idOdpTemp = $odp->idOdp;

        unset(
            $odpTemp['idOdp'],
            $odpTemp['idRegional'],
            $odpTemp['idDistribusi'],
            $odpTemp['idOdc'],
            $odpTemp['idFeeder'],
            $odpTemp['idFtmOa'],
            $odpTemp['idFtmEa'],
            $odpTemp['idGpon'],
            $odpTemp['idSto'],
            $odpTemp['idWitel']
        );

        $odpTemp['idOdpTemp'] = $idOdpTemp;
        DB::table("odpTemp")->insert($odpTemp);
    }


    public function get_mytickets_bookingcore()
    {
        $user_name = Auth::user()->name;
        // var_dump($user_name);
        $is_admin = Auth::user()->is_admin;
        $tiketUser = DB::table('tiket')
                ->leftJoin('statustiket', 'tiket.idStatusTiket', '=', 'statustiket.idStatusTiket')
                ->leftJoin('odp', 'tiket.idOdp', '=', 'odp.idOdp')
                ->leftJoin('odc', 'odp.idOdc', '=', 'odc.idOdc')
                ->leftJoin('distribusi', 'odp.idDistribusi', '=', 'Distribusi.idDistribusi')
                ->leftJoin('feeder', 'odp.idFeeder', '=', 'feeder.idFeeder')
                ->leftJoin('ftmEa', 'odp.idFtmEa', '=', 'FtmEa.idFtmEa')
                ->leftJoin('ftmOa', 'odp.idFtmOa', '=', 'FtmOa.idFtmOa')
                ->leftJoin('gpon', 'odp.idGpon', '=', 'gpon.idGpon')
                ->leftJoin('jenisodp', 'odp.idJenisOdp', '=', 'jenisOdp.idJenisOdp')
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy as user_name','statustiket.deskripsiStatus','odp.*','odc.*', 'gpon.ipGpon as ipgpon', 'gpon.panel as gpon_panel', 'gpon.port as gpon_port', 'gpon.slot as gpon_slot','gpon.*', DB::raw("CONCAT(gpon.panel, '/', gpon.port, '/', gpon.slot) AS gpon_all"),'ftmEa.rak as ftmea_rak', 'ftmEa.panel as ftmea_panel', 'ftmEa.slot as ftmea_slot', 'ftmEa.port as ftmea_port', DB::raw("CONCAT(ftmea.rak, '/', ftmea.panel, '/', ftmea.slot, '/', ftmea.port) as ftmea_all"), 'ftmOa.rak as ftmoa_rak', 'ftmOa.panel as ftmoa_panel','ftmOa.slot as ftmoa_slot', 'ftmOa.core as ftmoa_core', DB::raw("CONCAT(ftmoa.rak, '/', ftmoa.panel, '/', ftmoa.slot, '/', ftmoa.core) as ftmoa_all"), 'feeder.idStatusCore as fedstatcor', DB::raw("CONCAT(feeder.lat1, ' ', feeder.long1) as clos1"), DB::raw("CONCAT(feeder.lat2, ' ', feeder.long2) as clos2"), DB::raw("CONCAT(feeder.lat3, ' ', feeder.long3) as clos3"),'dis', 'distribusi.idStatusCore as disstatcor', 'odc.inPanel as odc_inpanel', 'odc.portIn as odc_portin', 'odc.outPsKe as odc_outpske', 'odc.outPanel as odc_outpanel', 'odc.portOut as odc_portout', 'jenisOdp.codeJenisOdp as jenis_odp')
                ->when($is_admin==0,function($q) use ($user_name){
                    $q->where('tiket.createdBy', '=', $user_name);
                })
                ->get();

                return view('myticket\booking_core',['tiketUser' => $tiketUser]);
    }


}