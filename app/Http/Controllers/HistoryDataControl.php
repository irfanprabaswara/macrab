<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HistoryDataControl extends Controller
{
    public function get()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            return view('tampil_history_data');
        }
    }
}
