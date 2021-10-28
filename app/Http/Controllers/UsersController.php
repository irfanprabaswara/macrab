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

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
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
