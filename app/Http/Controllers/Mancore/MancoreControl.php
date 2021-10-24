<?php

namespace App\Http\Controllers\Mancore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MancoreControl extends Controller
{
    public function insert_mancore()
    {
        $data['title'] = 'Tambah Data Mancore';
        return view('mancore.insert_mancore', $data);
    }
}
