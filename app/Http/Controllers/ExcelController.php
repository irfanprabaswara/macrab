<?php

namespace App\Http\Controllers;

use App\Imports\RegionalImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class ExcelController extends Controller
{
	public function Index()
	{
		return view('excelhome');
	}

    public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
        // dd($request->file('file'));
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_excel',$nama_file);
 
		// import data
		Excel::import(new RegionalImport, public_path('/file_excel/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Excel Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/');
	}
}
