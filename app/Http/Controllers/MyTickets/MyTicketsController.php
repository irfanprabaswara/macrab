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
                ->select('tiket.idTiket', 'tiket.idOdp', 'tiket.createdBy','statustiket.deskripsiStatus','odp.*')
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
        // nampilin detai??
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