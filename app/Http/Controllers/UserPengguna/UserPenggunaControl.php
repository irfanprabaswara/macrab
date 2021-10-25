<?php

namespace App\Http\Controllers\UserPengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserPenggunaControl extends Controller
{
    public function insert_user()
    {
        $data['title'] = 'Macrab Register Akun';
        return view('auth.register', $data);
    }

    public function post_user(Request $request)
    {
        // $validated = $request->validated();

        // insert data ke table users
        $result = DB::table('users')->insert([
            'name'       => $request->name,
            'nik'        => $request->nik,
            'email'      => $request->email,
            'address'    => $request->address,
            'contact'    => $request->contact,
            'regional'   => $request->regional,
            'witel'      => $request->witel,
            'mitra'      => $request->mitra,
            'photo'      => 'masih kosong',
            'is_admin'   => $request->is_admin,
            'password'   => bcrypt($request->password),
            'created_at' => Carbon::now(),
        ]);
        // alihkan halaman ke halaman view driver
        $data['title'] = 'Dashboard';

        if ($result) {
            Alert::success('Berhasil', 'User Baru Berhasil Ditambahkan');
            return redirect('/')->with($data, 'Tambah Data User Baru Sukses !');
        }
    }
}
