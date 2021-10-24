<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexHomeControl extends Controller
{
    public function get()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            return view('index');
        }
    }

    
    public function get_mytickets()
    {
        if (empty(Auth::user())) {
            return redirect('/login', 'refresh');
        } else {
            return view('mytickets');
        }
    }
}
