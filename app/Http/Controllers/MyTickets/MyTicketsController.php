<?php

namespace App\Http\Controllers\MyTickets;

use App\Http\Controllers\Controller;


class MyTicketsController extends Controller
{
    public function get_list_tickets_admin()
    { 
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