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
                ->leftJoin('ftmOa', 'tiket.idFtmOa', '=', 'FtmOa.idFtmOa')
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy as user_name','statustiket.deskripsiStatus','odp.*','odc.*','gpon.*','ftmOa.*')
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



}