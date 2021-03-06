<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
    	// mengambil data dari table users
    	$users = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('usersview',['users' => $users]);
 
    }

	public function accept()
    {
    	// mengambil data dari table users
    	$users = DB::table('users')-> where('status', '=', 0) ->get();
 
    	// mengirim data pegawai ke view index
    	return view('accept',['users' => $users]);
 
    }

	public function approve($id)
    {
    	// mengambil data dari table users
    	// $users = DB::table('users')-> where('status', '=', 0) ->get();
		$users = DB::table('users')
              ->where('id', $id)
              ->update(['status' => 1]);
 
    	// mengirim data pegawai ke view index
    	return redirect('/accept');
 
    }

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
		$regional = DB::table('regional')
            ->select('regional.namaRegional','regional.idRegional')
            ->get();

		$witel = DB::table('witel')
            ->select('witel.namaWitel','witel.idWitel')
            ->get();
		// memanggil view tambah
		// return view('tambah');
		return view('tambah', ['witel' => $witel,'regional' => $regional]);
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('users')->insert([
			'name' => $request->name,
			'nik' => $request->nik,
			'email' => $request->email,
			'address' => $request->address,
			'contact' => $request->contact,
			'is_admin' => $request->is_admin,
			'mitra' => $request->mitra,
			'witel' => $request->witel,
			'regional' => $request->Regional,
			'password' => $request->password 

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/users');
 
	}
 
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$users = DB::table('users')->where('id',$id)->get();
		// dd($users);
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['users' => $users]);
 
	}
 
	// update data pegawai
	public function Update(Request $request)
	{
		// update data pegawai
		DB::table('users')->where('id',$request->id)->update([
			'name' => $request->name,
			'nik' => $request->nik,
			'email' => $request->email,
			'address' => $request->address,
			'contact' => $request->contact,
			'is_admin' => $request->is_admin,
			'mitra' => $request->mitra,
			'witel' => $request->witel,
			'regional' => $request->Regional,
			'password' => $request->password
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/users');
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('users')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/users');
	}
}
