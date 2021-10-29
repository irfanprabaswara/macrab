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
                ->join('statustiket', 'tiket.idStatusTiket', '=', 'statustiket.idStatusTiket')
                ->join('odp', 'tiket.idOdp', '=', 'odp.idOdp')
                ->join('odc', 'odp.idOdc', '=', 'odc.idOdc')
                ->join('gpon', 'odp.idGpon', '=', 'gpon.idGpon')
                ->join('ftmOa', 'odp.idFtmOa', '=', 'FtmOa.idFtmOa')
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy','statustiket.deskripsiStatus','odp.*','odc.*','gpon.*','ftmOa.*')
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
        $approve_tiket = DB::table('tiket')
              ->where('idTiket', 3)
              ->update(['idStatus' => 1]);
              ->get();

              return view('tiket',['tiketUser' => $approve_tiket);
    }

    public function post_approve()
    { 
        // approve ticket by admin
        // mengubah status tiket jadi disetujui di database
    }

    public function post_decline()
    {
        // decline ticket by admin
        // mengubah status tiket jadi ga disetujui di database

    }




}