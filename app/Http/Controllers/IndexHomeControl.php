<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexHomeControl extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login')
            ->withSuccess('Anda Telah Keluar!');
    }

    public function comingsoon()
    {
        return view('comingsoon');
    }

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
