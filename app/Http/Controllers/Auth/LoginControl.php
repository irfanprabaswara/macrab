<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class LoginControl extends Controller
{
    public function get_login()
    {
        $data['title'] = 'Macrab Login';
        return view('auth.login', $data);
    }

    public function post_login(Request $request)
    {
        // $params = [
        //     'nip'    => $request->nip,
        //     'password' => $request->password,
        // ];

        if(Auth::attempt(['nik' => request('nik'), 'password' => request('password')]) ||
        Auth::attempt(['email' => request('nik'), 'password' => request('password')]))
        {
            return redirect('/');
        } else {
            return Redirect::back()->withErrors(['Password Salah Atau Akun Tidak Ditemukan ', 'The Message']);
        }
    }
}
